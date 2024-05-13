/**
 * @fileoverview i18n
 * 
 * To manage translations through the app
 * 
 * @license UNLICENSED
 * @version 1.0.0
 * 
 */

import { useI18n } from "vue-i18n";

/**
 * Set the locale language
 * 
 * @param locale 
 * 
 * @return void
 */
export const setLocale = (locale) => {
    const t = useI18n();
    t.locale.value = locale    
}

