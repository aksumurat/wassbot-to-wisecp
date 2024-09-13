<?php
    Class UKWapp extends AddonModule {
        public $version = "1.0";
        function __construct(){
            $this->_name = __CLASS__;
            parent::__construct();
        }

        public function fields(){
            $settings = isset($this->config['settings']) ? $this->config['settings'] : [];
            return [
                'appkey_value'          => [
                    'wrap_width'        => 100,
                    'name'              => "appkey",
                    'description'       => "UKWapp'den Aldığınız Uygulama APP Key'i buraya giriniz!",
                    'type'              => "text",
                    'value'             => isset($settings["appkey_value"]) ? $settings["appkey_value"] : "",
                ],
                'gonderilen_yetkili_tel'          => [
                    'wrap_width'        => 100,
                    'name'              => "Bildirim Gönderilecek Yetkili Telefonu  </br> (BİRDEN FAZLA VAR İSE VİRGÜL İLE AYIRINIZ!)",
                    'description'       => "WhatsApp üzerinden hangi yetkiliye bildirim gidecek ise ülke kodu ile numara giriniz!",
                    'type'              => "text",
                    'value'             => isset($settings["gonderilen_yetkili_tel"]) ? $settings["gonderilen_yetkili_tel"] : "",
                ],
                'gonderilen_yetkili_destek_tel'          => [
                    'wrap_width'        => 100,
                    'name'              => "Ticket Bildirimi Gönderilecek Yetkili Telefonu </br> (BİRDEN FAZLA VAR İSE VİRGÜL İLE AYIRINIZ!)",
                    'description'       => "WhatsApp üzerinden hangi yetkiliye ticket bildirimleri gidecek ise ülke kodu ile numara giriniz!",
                    'type'              => "text",
                    'value'             => isset($settings["gonderilen_yetkili_destek_tel"]) ? $settings["gonderilen_yetkili_destek_tel"] : "",
                ],
                'sis_kayit_no'          => [
                    'wrap_width'        => 100,
                    'name'              => "sis_kayit_no",
                    'description'       => "Sistemde Kayıtlı Telefon Numarası !",
                    'type'              => "text",
                    'value'             => isset($settings["sis_kayit_no"]) ? $settings["sis_kayit_no"] : "",
                ],
                
                'firmabasligi'          => [
                    'wrap_width'        => 100,
                    'name'              => "Firma Başlığı",
                    'description'       => "Mesajın ilk satırında gönderilecek firma başlığı",
                    'type'              => "text",
                    'value'             => isset($settings["firmabasligi"]) ? $settings["firmabasligi"] : "",
                ],
                'ticket_olusturuldu_musteri_msg'          => [
                    'wrap_width'        => 100,
                    'name'              =>      
"
Ticket Oluşturulduğunda Gönderilecek Mesaj 🚀 </br>
-firmabasligi- </br>
Yeni Destek Talebiniz Oluşturuldu!  </br>
ID : #-id-  </br>
Konu : -konu- , </br> 
-özelleştirilebilen metin alanı-" ,
                    'description'       => "",
                    'type'              => "text",
                    'value'             => isset($settings["ticket_olusturuldu_musteri_msg"]) ? $settings["ticket_olusturuldu_musteri_msg"] :"",
                    'placeholder'       => "özelleştirilebilen metin alanı",
                ],
                'ticket_admin_yanit_verdi_musteri_msg'          => [
                    'wrap_width'        => 100,
                    'name'              =>      
"
Ticket Yönetici Tarafından Yanıtlandığında Gönderilecek Mesaj 🚀 </br>
-firmabasligi- </br>
Destek Talebiniz Yanıtlandı!  </br>
ID : #-id-  </br>
-özelleştirilebilen metin alanı-" ,
                    'description'       => "",
                    'type'              => "text",
                    'value'             => isset($settings["ticket_admin_yanit_verdi_musteri_msg"]) ? $settings["ticket_admin_yanit_verdi_musteri_msg"] :"",
                    'placeholder'       => "özelleştirilebilen metin alanı",
                ],
                'fatura_onaylandi_musteri_msg'          => [
                    'wrap_width'        => 100,
                    'name'              =>      
"
Fatura Onaylandığında Gönderilecek Mesaj 🚀 </br>
-firmabasligi- </br>
Sayın -musteri-,  </br>
#-id- numaralı -ucret- ₺ değerinde ki faturanız onaylandı. </br>
-özelleştirilebilen metin alanı-" ,
                    'description'       => "",
                    'type'              => "text",
                    'value'             => isset($settings["fatura_onaylandi_musteri_msg"]) ? $settings["fatura_onaylandi_musteri_msg"] :"",
                    'placeholder'       => "özelleştirilebilen metin alanı",
                ],
                'fatura_olusturuldu_musteri_msg'          => [
                    'wrap_width'        => 100,
                    'name'              =>      
"
Fatura Oluşturulduğunda Gönderilecek Mesaj 🚀 </br>
-firmabasligi- </br>
Sayın -musteri-,  </br>
#-id- numaralı -ucret- ₺ değerinde ki faturanız oluşturuldu. </br>
-özelleştirilebilen metin alanı-" ,
                    'description'       => "",
                    'type'              => "text",
                    'value'             => isset($settings["fatura_olusturuldu_musteri_msg"]) ? $settings["fatura_olusturuldu_musteri_msg"] :"",
                    'placeholder'       => "özelleştirilebilen metin alanı",
                ],
                'yeni_musteri_msg'          => [
                    'wrap_width'        => 100,
                    'name'              =>      
"
Yeni Üye Kayıt Olduğunda Gönderilecek Mesaj 🚀 </br>
-firmabasligi- </br>
Hoş geldiniz! </br>
Sayın, -musteri-,</br>
-özelleştirilebilen metin alanı-" ,
                    'description'       => "",
                    'type'              => "text",
                    'value'             => isset($settings["yeni_musteri_msg"]) ? $settings["yeni_musteri_msg"] :"",
                    'placeholder'       => "özelleştirilebilen metin alanı",
                ],
                
                'odenmemis_fatura_msg'          => [
                    'wrap_width'        => 100,
                    'name'              =>      
"
Ödenmemiş Fatura Bildirimi Gönderilecek Mesaj 🚀 </br>
-firmabasligi- </br>
Sayın, -musteri-,</br>
#-id- numaralı -ucret- ₺ değerinde ki faturanızın ödemesi ödenmemiş/gecikmiştir. </br>
-özelleştirilebilen metin alanı-" ,
                    'description'       => "",
                    'type'              => "text",
                    'value'             => isset($settings["odenmemis_fatura_msg"]) ? $settings["odenmemis_fatura_msg"] :"",
                    'placeholder'       => "özelleştirilebilen metin alanı",
                ],

                
                
            ];
        }

        public function save_fields($fields=[]){
            if(!isset($fields['appkey_value']) || !$fields['appkey_value']){
                $this->error = $this->lang["error1"];
                return false;
            }
            return $fields;
        }

        public function activate(){
            /*
             * Here, you can perform any intervention before the module is activate.
             * If you return boolean (true), the module will be activate.
            */
            return true;
        }

        public function deactivate(){
            /*
             * Here, you can perform any intervention before the module is deactivate.
             * If you return boolean (true), the module will be deactivate.
            */
            return true;
        }

        public function adminArea()
        {
            $action = Filter::init("REQUEST/action","route");
            if(!$action) $action = 'index';

            $variables = [
                'link'              => $this->area_link,  /* https://***..com/admin/tools/addons/SampleAddon */
                'dir_link'          => $this->url,       /* https://***..com/coremio/modules/Addons/SampleAddon/ */
                'dir_path'          => $this->dir,      /* /-- DOCUMENT ROOT --/coremio/modules/Addons/SampleAddon/ */
                'dir_name'          => $this->_name,    /* SampleAddon, */
                'name'              => $this->lang["meta"]["name"], /* Sample Addon */
                'version'           => $this->config["meta"]["version"], /* 1.0 */
                'fields'            => $this->fields(),
            ];

            return [
                'page_title'        => 'Sample Addon Module',
                'breadcrumbs'       => [
                    [
                        'link'      => '',
                        'title'     => 'Sample Addon',
                    ],
                ],
                'content'           => $this->view($action.".php",$variables)
            ];
        }

        public function clientArea()
        {
            $action = Filter::init("REQUEST/action","route");
            if(!$action) $action = 'index';

            $variables = [
                'link'              => $this->area_link,  /* https://***..com/addon/SampleAddon/client */
                'dir_link'          => $this->url,       /* https://***..com/coremio/modules/Addons/SampleAddon/ */
                'dir_path'          => $this->dir,      /* /-- DOCUMENT ROOT --/coremio/modules/Addons/SampleAddon/ */
                'dir_name'          => $this->_name,    /* SampleAddon, */
                'name'              => $this->lang["meta"]["name"], /* Sample Addon */
                'version'           => $this->config["meta"]["version"], /* 1.0 */
                'fields'            => $this->fields(),
            ];

            return [
                'page_title'        => 'Sample Addon Module',
                'breadcrumbs'       => [
                    [
                        'link'      => '',
                        'title'     => 'Sample Addon',
                    ],
                ],
                'content'           => $this->view($action.".php",$variables)
            ];
        }

        public function upgrade(){
            if($this->config["meta"]["version"] < 1.1)
            {
                /*
                 * Modules::$init->db->query("ALTER TABLE md_SampleAddon ADD test1 varchar(255);"); # PDO::query()
                */
            }
            elseif($this->config["meta"]["version"] < 1.2)
            {
                /*
                 * Modules::$init->db->query("ALTER TABLE md_SampleAddon ADD test2 varchar(255);"); # PDO::query()
                */
            }

            /*
             * If you want to give an error:
             * $this->error = "sample error text here";
             * return false;
            */

            return true;
        }

        public function main()
        {
            $action = Filter::init("REQUEST/action","route");
            if(!$action) $action = 'index';

            $variables = [
                'link'              => $this->area_link,  /* https://***..com/addon/SampleAddon/client */
                'dir_link'          => $this->url,       /* https://***..com/coremio/modules/Addons/SampleAddon/ */
                'dir_path'          => $this->dir,      /* /-- DOCUMENT ROOT --/coremio/modules/Addons/SampleAddon/ */
                'dir_name'          => $this->_name,    /* SampleAddon, */
                'name'              => $this->lang["meta"]["name"], /* Sample Addon */
                'version'           => $this->config["meta"]["version"], /* 1.0 */
                'fields'            => $this->fields(),
            ];

            return [
                'use_with_theme'   => true,
                'header_background' => 'https://img.icons8.com/avantgarde/100/whatsapp.png',
                'page_title'        => 'UKWapp',
                'breadcrumbs'       => [
                    [
                        'link'      => 'https://www.ukwapp.com/',
                        'title'     => 'UKWapp',
                    ],
                ],
                'content'           => $this->view($action.".php",$variables)
            ];
        }

    }

    /**
     * Example hook function for client register
     * @param string $name Name of the hook to be called
     * @param integer $priority Priority for hook function
     * @param callable|array You can send a callable function or an array, example as follows:
     *  [
     *    'function' => 'function name',
     *    'class'    => 'class name',
     *    'method'   => 'public method name in class', // class -> function
     *    'method::static'   => 'static method name in class', // class :: function
     *  ]
     *
     * @return void
     */

     //-------------------Ticket Olayları Başlangıç <>--------------------------------------------------

    Hook::add("TicketClientCreated",1,function($params=[]){ //ticket oluşturuldu bildirimi yapıldı. - özelleştirme eklentiye eklendi.
        $config = include __DIR__.DS."config.php";

        $user_data = User::getData($params["user_id"],"phone");
        $phone = $user_data->phone;
        
        $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Yeni Destek Talebi! ".PHP_EOL."ID : #".$params['id']."".PHP_EOL."Konu : ".$params['title']."".PHP_EOL."İçerik : ".$params["message"];
        
        $numbers = explode(',', $config['settings']['gonderilen_yetkili_destek_tel']); // Virgüle göre numaraları
        foreach ($numbers as $number) {
            wp_send_sms($number, $txt); 
        }

        $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Yeni Destek Talebiniz Oluşturuldu! ".PHP_EOL."ID : #".$params['id']."".PHP_EOL."Konu : ".$params['title']."".PHP_EOL."".$config['settings']['ticket_olusturuldu_musteri_msg']."";
        wp_send_sms($phone,$txt); // Müşteri Telefonu

});

Hook::add("TicketClientReplied",1,function($params=[]){ //ticket oluşturuldu bildirimi yapıldı. - özelleştirme eklentiye eklendi. // SADECE TİCKETI ÜSTLENENE BİLDİRİM GİDER!
    $config = include __DIR__.DS."config.php";
    
    $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Destek Talebi Yanıtlandı! ".PHP_EOL."ID : #".$params['request']['id']."".PHP_EOL."Konu : ".$params['request']['title']."".PHP_EOL."İçerik : ".$params['reply']['message'];
    
    // $numbers = explode(',', $config['settings']['gonderilen_yetkili_tel']); // Virgüle göre numaraları ayırın
    // foreach ($numbers as $number) {
    //     wp_send_sms($number, $txt); // Her bir numaraya mesaj gönderin
    // }

    $user_data = User::getData($params['request']['assigned'],"phone");
    $phone = $user_data->phone;
    wp_send_sms($phone, $txt); //ticket kime atandıysa sadece ona gönderiyoruz
    
});


Hook::add("TicketAdminReplied",1,function($params=[]){ // ticket'a yönetici yanıt verdi, kullanıcıya bildirim yapıldı. - özelleştirme eklentiye eklendi.
    $config = include __DIR__.DS."config.php";
   
    $user_data = User::getData($params["request"]["user_id"],"phone");
    $phone = $user_data->phone;

    $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Destek Talebiniz Yanıtlandı! ".PHP_EOL."ID : #".$params['request']['id']."".PHP_EOL."Konu : ".$params['request']['title']."".PHP_EOL."".$config['settings']['ticket_admin_yanit_verdi_musteri_msg']."";
    wp_send_sms($phone,$txt); //Kullanıcı Telefonu

});
//-------------------Ticket Olayları Bitiş </>--------------------------------------------------


//----------------------Fatura Olayları Başlangıç <>-----------------------------------------------
Hook::add("InvoicePaid",1,function($params=[]){ // faturanız onaylandı bildirimi müşteriye yapıldı - özelleştirme eklentiye eklendi.
    $config = include __DIR__.DS."config.php";

    $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Sayın ".$params['user_data']['name'].", ".PHP_EOL."#".$params['id']." numaralı ".number_format($params['total'], 2, ',', '.')." ₺ değerinde ki faturanız onaylandı.".PHP_EOL."".$config['settings']['fatura_onaylandi_musteri_msg']."";
    wp_send_sms($params['user_data']['landline_cc'] + $params['user_data']['gsm'],$txt); //Kullanıcı Telefonu

});

Hook::add("InvoiceCreated",1,function($params=[]){ // faturanız oluşturuldu bildirimi müşteriye yapıldı, yöneticiye ise sipariş geldi bildirimi yapıldı! özelleştirme eklentiye eklendi.
    $config = include __DIR__.DS."config.php";

    $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Yeni Sipariş! ".PHP_EOL."ID : #".$params['id']."".PHP_EOL."Müşteri : ".$params['user_data']['full_name'].", ".PHP_EOL."#".$params['id']." numaralı ".number_format($params['total'], 2, ',', '.')." ₺ değerinde yeni bir sipariş geldi!";

    $numbers = explode(',', $config['settings']['gonderilen_yetkili_tel']); // Virgüle göre numaraları
        foreach ($numbers as $number) {
            wp_send_sms($number, $txt); 
    }

    $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Sayın ".$params['user_data']['name'].", ".PHP_EOL."#".$params['id']." numaralı ".number_format($params['total'], 2, ',', '.')." ₺ değerinde ki faturanız oluşturuldu.".PHP_EOL."".$config['settings']['fatura_olusturuldu_musteri_msg']."";
    wp_send_sms($params['user_data']['landline_cc'] + $params['user_data']['gsm'],$txt); //Kullanıcı Telefonu
    
});
//----------------------Fatura Olayları Bitiş </>-----------------------------------------------

//----------------------Hizmet / Sipariş Olayları Başlangıç <>-----------------------------------------------

// Hook::add("OrderActivated",1,function($params=[]){ // faturanız oluşturuldu bildirimi müşteriye yapıldı, yöneticiye ise sipariş geldi bildirimi yapıldı!
//     $config = include __DIR__.DS."config.php";

//     $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Sayın ".$params['user_data']['name'].", ".PHP_EOL."#".$params['id']." numaralı hizmetiniz aktif edildi!. Bizleri tercih ettiğiniz için teşekkür ederiz!";
//     wp_send_sms($params['user_data']['landline_cc'] + $params['user_data']['gsm'],$txt); //Kullanıcı Telefonu

// });

 Hook::add("OrderSuspended",1,function($params=[]){ // faturanız oluşturuldu bildirimi müşteriye yapıldı, yöneticiye ise sipariş geldi bildirimi yapıldı!
   $config = include __DIR__.DS."config.php";

   $user_data = User::getData($params["owner_id"],"phone,full_name");
   $phone = $user_data->phone;
   $full_name = $user_data->full_name;

    $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Sayın ".$full_name.", ".PHP_EOL."#".$params['id']." numaralı hizmetiniz askıya alındı!".PHP_EOL."Detaylı bilgi için destek ile iletişime geçebilirsiniz!";
    wp_send_sms($phone,$txt); //Kullanıcı Telefonu
});

Hook::add("OrderCancelled",1,function($params=[]){ // faturanız oluşturuldu bildirimi müşteriye yapıldı, yöneticiye ise sipariş geldi bildirimi yapıldı!
    $config = include __DIR__.DS."config.php";
 
    $user_data = User::getData($params["owner_id"],"phone,full_name");
    $phone = $user_data->phone;
    $full_name = $user_data->full_name;
 
     $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Sayın ".$full_name.", ".PHP_EOL."#".$params['id']." numaralı hizmetiniz iptal edildi!".PHP_EOL."Detaylı bilgi için destek ile iletişime geçebilirsiniz!";
     wp_send_sms($phone,$txt); //Kullanıcı Telefonu
 });

 Hook::add("OrderActivated",1,function($params=[]){ // faturanız oluşturuldu bildirimi müşteriye yapıldı, yöneticiye ise sipariş geldi bildirimi yapıldı!
    $config = include __DIR__.DS."config.php";
 
    $user_data = User::getData($params["owner_id"],"phone,full_name");
    $phone = $user_data->phone;
    $full_name = $user_data->full_name;
 
     $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Sayın ".$full_name.", ".PHP_EOL."#".$params['id']." numaralı hizmetiniz aktif edildi!";
     wp_send_sms($phone,$txt); //Kullanıcı Telefonu
 });

 

//----------------------Hizmet Olayları Bitiş </>-----------------------------------------------

//----------------------Sisteme Kayıt Olayları Başlangıç <>-----------------------------------------------

Hook::add("ClientCreated",1,function($params=[]){

    $name           = $params['name'];
    $surname        = $params['surname'];
    $email          = $params['email'];
    $phone          = $params['phone'];

    $config = include __DIR__.DS."config.php";
    $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL. "Yeni Müşteri Kayıt Oldu! ".PHP_EOL."Müşteri Adı : ".$name." ".$surname.PHP_EOL."E-Posta : ".$email."".PHP_EOL."Telefon : ".$phone;
    
    $numbers = explode(',', $config['settings']['gonderilen_yetkili_tel']); // Virgüle göre numaraları ayırın
    foreach ($numbers as $number) {
        wp_send_sms($number, $txt); // Her bir numaraya mesaj gönderin
    }

    
    $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL. "Hoş geldiniz! ".PHP_EOL."Sayın, ".$name." ".$surname."".PHP_EOL."".$config['settings']['yeni_musteri_msg']."";
      wp_send_sms($phone,$txt); //Kullanıcı Telefonu

});

//----------------------Sisteme Kayıt Olayları Bitiş </>-----------------------------------------------

//----------------------Fatura Hatırlatma Olayları Başlangıç <>-----------------------------------------------
Hook::add("InvoicePaymentReminder",1,function($params=[]){ // faturanız ödenmemiş gecikmiş bilgilendirmesi
    $config = include __DIR__.DS."config.php";

    $txt =  "*".$config['settings']['firmabasligi']."*".PHP_EOL."Sayın ".$params['user_data']['name'].", ".PHP_EOL."#".$params['id']." numaralı ".number_format($params['total'], 2, ',', '.')." ₺ değerinde ki faturanızın ödemesi ödenmemiş/geçikmiştir.".PHP_EOL."".$config['settings']['odenmemis_fatura_msg']."";
    wp_send_sms($params['user_data']['landline_cc'] + $params['user_data']['gsm'],$txt); //Kullanıcı Telefonu

});
//----------------------Fatura Hatırlatma Olayları Bitiş </>-----------------------------------------------

function wp_send_sms ($number,$sms){

    $config = include __DIR__.DS."config.php";

	if (substr($number,0,1)=="5") {
		$number="90".$number;
	}else{
		if (substr($number,0,1)!="9") {
			$number="9".$number;
		}	
	}
    

    $headers = [
        'Accept-Language' => 'tr',
        'accept' => 'application/json',
        'content-type' => 'application/json',
        'wapikey' => $config['settings']['appkey_value']
    ];
    
    $bodyData = [
        'type' => 1,
        'interval' => 1,
        'autoblacklist' => false,
        'blacklistlink' => true,
        'numbers' => $number,
        'message' => $sms
    ];
    
    $body = json_encode($bodyData, JSON_UNESCAPED_UNICODE);
    
    $ch = curl_init();
    $api_url = 'https://www.ukwapp.com/api/' . $config['settings']['sis_kayit_no'] . '/send-message';
    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array_map(function ($key, $value) {
        return "$key: $value";
    }, array_keys($headers), $headers));

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo 'cURL Hatası: ' . curl_error($ch);
    }

    curl_close($ch);

    return $response;
}

?>