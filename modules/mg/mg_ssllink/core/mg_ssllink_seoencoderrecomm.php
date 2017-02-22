<?php

class mg_ssllink_seoencoderrecomm extends mg_ssllink_seoencoderrecomm_parent {

    /**
     * Returns SEO url with shop's path + additional params ( oxseoencoder:: _getAddParams)
     *
     * @param string $sSeoUrl seo URL
     * @param int    $iLang   active language
     * @param bool   $blSsl   forces to build ssl url
     *
     * @return string
     */
    protected function _getFullUrl($sSeoUrl, $iLang = null, $blSsl = true)
    {
        return parent::_getFullUrl($sSeoUrl, $iLang, $blSsl);
    }

}
