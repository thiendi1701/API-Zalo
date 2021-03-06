<?php
/**
 * Zalo © 2017
 *
 */

namespace Zalo;

/**
 * Class ZaloConfig
 *
 * @package Zalo
 */
class ZaloConfig {

    /** @var self */
    protected static $instance;
    //Duy
    /** config your app id here */
    // const ZALO_APP_ID_CFG = "932541833157921742";
    
    /** config your app secret key here */
    // const ZALO_APP_SECRET_KEY_CFG = "B1KZ45UD3yLViBiEvQcD";
    
    /** config your offical account id here */
    // const ZALO_OA_ID_CFG = "2184792249474812865";
    
    /** config your offical account secret key here */
    // const ZALO_OA_SECRET_KEY_CFG = "2G6n9VBRQiNJiQepOLgL";
    
    //Duyên
    /** config your app id here */
    const ZALO_APP_ID_CFG = "3642985206743289149";
    
    /** config your app secret key here */
    const ZALO_APP_SECRET_KEY_CFG = "B7eUQY5aTCc62wzBhtL3";
    
    /** config your offical account id here */
    const ZALO_OA_ID_CFG = "2860640895799555633";
    
    /** config your offical account secret key here */
    const ZALO_OA_SECRET_KEY_CFG = "7QI2UMFVF6m4CMHo81e8";

    /**
     * Get a singleton instance of the class
     *
     * @return self
     * @codeCoverageIgnore
     */
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Get zalo sdk config
     * @return []
     */
    public function getConfig() {
        return [
            'app_id' => static::ZALO_APP_ID_CFG,
            'app_secret' => static::ZALO_APP_SECRET_KEY_CFG,
            'oa_id' => static::ZALO_OA_ID_CFG,
            'oa_secret' => static::ZALO_OA_SECRET_KEY_CFG
        ];
    }

}
