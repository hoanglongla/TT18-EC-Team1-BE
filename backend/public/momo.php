<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
class Momo{
    private $config;
    private $phone              = ''; //Số điện thoại momo
    private $otp                = ''; //Mã otp lúc đăng nhập vào app
    private $password           = ''; //Pass momo
    private $rkey               = ''; // 20 characters trong public/login
    private $setupKeyEncrypted  = ""; // (*): Xem trong public
    private $imei               = ""; // (*): Xem trong public
    private $token              = ''; // (*): Xem trong public
    private $onesignalToken     = ''; // (*): Xem trong public

    public function __construct(){
        $ohash = hash('sha256', $this->phone . $this->rkey . $this->otp);
        $this->config = [
            'phone'                 => $this->phone, //sdt (*)
            'otp'                   => $this->otp, //otp (*)
            'password'              => $this->password, //pass (*)
            'rkey'                  => $this->rkey, // 20 characters (*)
            'setupKeyEncrypted'     => $this->setupKeyEncrypted, // (*): 
            'imei'                  => $this->imei, // (*)
            'token'                 => $this->token, // (*)
            'onesignalToken'        => $this->onesignalToken, // (*)
            'aaid'                  => '', //null
            'idfa'                  => '', //nul
            'csp'                   => 'Viettel', //Xem trong Charles
            'icc'                   => '', 
            'mcc'                   => '0',
            'mnc'                   => '0',
            'cname'                 => 'Vietnam', //Xem trong Charles
            'ccode'                 => '084', //Xem trong Charles
            'channel'               => 'APP',
            'lang'                  => 'vi',
            'device'                => 'iPhone', //Xem trong Charles
            'firmware'              => '12.4.8', //Xem trong Charles
            'manufacture'           => 'Apple', //Xem trong Charles
            'hardware'              => 'iPhone', //Xem trong Charles
            'simulator'             => false,
            'appVer'                => '21540', //Xem trong Charles
            'appCode'               => "2.1.54", //Xem trong Charles
            'deviceOS'              => "IOS", //Xem trong Charles
            'setupKeyDecrypted'     => $this->encryptDecrypt($this->setupKeyEncrypted, $ohash, 'DECRYPT')

        ];
    }

    private function encryptDecrypt($data, $key, $mode = 'ENCRYPT'){
        if (strlen($key) < 32) {
            $key = str_pad($key, 32, 'x');
        }
        $key = substr($key, 0, 32);
        $iv = pack('C*', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        if ($mode === 'ENCRYPT') {
            return base64_encode(openssl_encrypt($data, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv));
        }
        else {
            return openssl_decrypt(base64_decode($data), 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
        }
    }

    private function get_microtime(){
        return floor(microtime(true) * 1000);
    }

    private function get_checksum($type){
        $config         = $this->config;
        $checkSumSyntax = $config['phone'] . $this->get_microtime() . '000000' . $type . ($this->get_microtime() / 1000000000000.0) . 'E12';
        return $this->encryptDecrypt($checkSumSyntax, $config['setupKeyDecrypted']);
    }

    private function get_pHash(){
        $config         = $this->config;
        $pHashSyntax    = $config['imei'] . '|' . $config['password'];
        return $this->encryptDecrypt($pHashSyntax, $config['setupKeyDecrypted']);
    }

    public function get_auth(){
        $config         = $this->config;
        $type           = 'USER_LOGIN_MSG';
        $data_body = [
            'user'      => $config['phone'],
            'pass'      => $config['password'],
            'msgType'   => $type,
            'cmdId'     => $this->get_microtime() . '000000',
            'lang'      => $config['lang'],
            'channel'   => $config['channel'],
            'time'      => $this->get_microtime(),
            'appVer'    => $config['appVer'],
            'appCode'   => $config['appCode'],
            'deviceOS'  => $config['deviceOS'],
            'result'    => true,
            'errorCode' => 0,
            'errorDesc' => '',
            'extra'     => [
                'checkSum'          => $this->get_checksum($type),
                'pHash'             => $this->get_pHash(),
                'AAID'              => $config['aaid'],
                'IDFA'              => $config['idfa'],
                'TOKEN'             => $config['token'],
                'ONESIGNAL_TOKEN'   => $config['onesignalToken'],
                'SIMULATOR'         => $config['simulator']
            ],
            'momoMsg'   => [
                '_class'    => 'mservice.backend.entity.msg.LoginMsg'
                , 'isSetup' => true
            ]
        ];

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL             => "https://owa.momo.vn/public",
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_ENCODING        => "",
            CURLOPT_MAXREDIRS       => 10,
            CURLOPT_TIMEOUT         => 30,
            CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST   => "POST",
            CURLOPT_POSTFIELDS      => json_encode($data_body),
            CURLOPT_HTTPHEADER      => array(
                'User-Agent'    => "MoMoApp-Release/%s CFNetwork/978.0.7 Darwin/18.6.0",
                'Msgtype'       => "USER_LOGIN_MSG",
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json',
                'Userhash'      => md5($config['phone'])  ,
            )
        ));
        $response = curl_exec($curl);
        if(!$response){
            return false;
        }
        return json_decode($response)->extra->AUTH_TOKEN;
    }

    public function history($day = 1){
        $config = $this->config;
        $type   = 'QUERY_TRAN_HIS_MSG';
        $data_post =  [
            'user'      => $config['phone'],
            'msgType'   => $type,
            'cmdId'     => $this->get_microtime() . '000000',
            'lang'      => $config['lang'],
            'channel'   => $config['channel'],
            'time'      => $this->get_microtime(),
            'appVer'    => $config['appVer'],
            'appCode'   => $config['appCode'],
            'deviceOS'  => $config['deviceOS'],
            'result'    => true,
            'errorCode' => 0,
            'errorDesc' => '',
            'extra'     => [
                'checkSum' => $this->get_checksum($type)
            ],
            'momoMsg'   => [
                '_class'    => 'mservice.backend.entity.msg.QueryTranhisMsg',
                'begin'     => (time() - (86400 * $day)) * 1000,
                'end'       => $this->get_microtime()
            ]
        ];
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL             => "https://owa.momo.vn/api/sync/$type",
            CURLOPT_RETURNTRANSFER  => true,
            CURLOPT_ENCODING        => "",
            CURLOPT_MAXREDIRS       => 10,
            CURLOPT_TIMEOUT         => 30,
            CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST   => "POST",
            CURLOPT_POSTFIELDS      => json_encode($data_post),
            CURLOPT_HTTPHEADER      => array(
                'User-Agent'    => "MoMoApp-Release/%s CFNetwork/978.0.7 Darwin/18.6.0",
                'Msgtype'       => $type,
                'Userhash'      => md5($config['phone']),
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json',
                'Authorization: Bearer ' . trim($this->get_auth()),
            )
        ));
        $result = curl_exec($ch);
        if(!$result){
            return false;
        }
        return $result;
    }
     public function oder_cash($sdt, $name, $cmt, $amount) {
         
        $config = $this->config;
        $type   = 'M2MU_INIT';
            $data_post = [
              'user'      => $config['phone'],
              'msgType'   => $type,
              'cmdId'     => $this->get_microtime() . '000000',
              'lang'      => $config['lang'],
              'channel'   => $config['channel'],
              'time'      => $this->get_microtime(),
              'appVer'    => $config['appVer'],
              'appCode'   => $config['appCode'],
              'deviceOS'  => $config['deviceOS'],
              'result' => true,
              'errorCode' => 0,
              'errorDesc' => '',
              'extra' => [
                'checkSum' => $this->get_checksum($type)
              ],
              'momoMsg' => [
                '_class' => 'mservice.backend.entity.msg.M2MUInitMsg',
                'ref' => '',
                'tranList' => [
                  0 => [
                    '_class' => 'mservice.backend.entity.msg.TranHisMsg',
                    'tranType' => 2018,
                    'partnerId' => $sdt,
                    'originalAmount' => $amount,
                    'comment' => $cmt,
                    'moneySource' => 1,
                    'partnerCode' => 'momo',
                    'partnerName' => $name,
                    'rowCardId' => NULL,
                    'serviceMode' => 'transfer_p2p',
                    'serviceId' => 'transfer_p2p',
                    'extras' => '{"vpc_CardType":"SML","vpc_TicketNo":"115.79.139.158","receiverMembers":[{"receiverNumber":"'.$sdt.'","receiverName":"'.$name.'","originalAmount":'.$amount.'}],"loanId":0,"contact":{}}',
                  ],
                ],
              ],
            ];
            
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL             => "https://owa.momo.vn/api/$type",
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_ENCODING        => "",
                CURLOPT_MAXREDIRS       => 10,
                CURLOPT_TIMEOUT         => 30,
                CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST   => "POST",
                CURLOPT_POSTFIELDS      => json_encode($data_post),
                CURLOPT_HTTPHEADER      => array(
                    'User-Agent'    => "MoMoApp-Release/%s CFNetwork/978.0.7 Darwin/18.6.0",
                    'Msgtype'       => $type,
                    'Userhash'      => md5($config['phone']),
                    'Accept'        => 'application/json',
                    'Content-Type'  => 'application/json',
                    'Authorization: Bearer ' . trim($this->get_auth()),
                )
            ));
            $result = curl_exec($ch);
            if(!$result){
                return false;
            }
            return $result;
        
    }
    
    public function comfirm_oderr($id) {
        $config = $this->config;
        $type   = 'M2MU_CONFIRM';

        $data_post = [ 
              'user'      => $config['phone'],
              'msgType'   => $type,
              'cmdId'     => $this->get_microtime() . '000000',
              'lang'      => $config['lang'],
              'channel'   => $config['channel'],
              'time'      => $this->get_microtime(),
              'appVer'    => $config['appVer'],
              'appCode'   => $config['appCode'],
              'deviceOS'  => $config['deviceOS'],
              'result' => true,
              'errorCode' => 0,
              'errorDesc' => '',
              'extra' => [ 
                'checkSum' => $this->get_checksum($type),
              ],
              'momoMsg' => [
                'ids' => [
                  0 => $id,
                ],
                'bankInId' => '',
                '_class' => 'mservice.backend.entity.msg.M2MUConfirmMsg',
                'otp' => '',
                'otpBanknet' => '',
                'extras' => '',
              ],
              'pass' => $config['password'],
            ];
            
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL             => "https://owa.momo.vn/api/$type",
                CURLOPT_RETURNTRANSFER  => true,
                CURLOPT_ENCODING        => "",
                CURLOPT_MAXREDIRS       => 10,
                CURLOPT_TIMEOUT         => 30,
                CURLOPT_HTTP_VERSION    => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST   => "POST",
                CURLOPT_POSTFIELDS      => json_encode($data_post),
                CURLOPT_HTTPHEADER      => array(
                    'User-Agent'    => "MoMoApp-Release/%s CFNetwork/978.0.7 Darwin/18.6.0",
                    'Msgtype'       => $type,
                    'Userhash'      => md5($config['phone']),
                    'Accept'        => 'application/json',
                    'Content-Type'  => 'application/json',
                    'Authorization: Bearer ' . trim($this->get_auth()),
                )
            ));
            $result = curl_exec($ch);
            if(!$result){
                return false;
            }
            return $result;
        
    }  
}
?>