<?php
function codify($valor) {
    $valor = str_replace("\u00c0", "À", $valor);
    $valor = str_replace("\u00c1", "Á", $valor);
    $valor = str_replace("\u00c2", "Â", $valor);
    $valor = str_replace("\u00c3", "Ã", $valor);
    $valor = str_replace("\u00c4", "Ä", $valor);
    $valor = str_replace("\u00c5", "Å", $valor);
    $valor = str_replace("\u00c6", "Æ", $valor);
    $valor = str_replace("\u00c7", "Ç", $valor);
    $valor = str_replace("\u00c8", "È", $valor);
    $valor = str_replace("\u00c9", "É", $valor);
    $valor = str_replace("\u00ca", "Ê", $valor);
    $valor = str_replace("\u00cb", "Ë", $valor);
    $valor = str_replace("\u00cc", "Ì", $valor);
    $valor = str_replace("\u00cd", "Í", $valor);
    $valor = str_replace("\u00ce", "Î", $valor);
    $valor = str_replace("\u00cf", "Ï", $valor);
    $valor = str_replace("\u00d1", "Ñ", $valor);
    $valor = str_replace("\u00d2", "Ò", $valor);
    $valor = str_replace("\u00d3", "Ó", $valor);
    $valor = str_replace("\u00d4", "Ô", $valor);
    $valor = str_replace("\u00d5", "Õ", $valor);
    $valor = str_replace("\u00d6", "Ö", $valor);
    $valor = str_replace("\u00d8", "Ø", $valor);
    $valor = str_replace("\u00d9", "Ù", $valor);
    $valor = str_replace("\u00da", "Ú", $valor);
    $valor = str_replace("\u00db", "Û", $valor);
    $valor = str_replace("\u00dc", "Ü", $valor);
    $valor = str_replace("\u00dd", "Ý", $valor);
    $valor = str_replace("\u00df", "ß", $valor);
    $valor = str_replace("\u00e0", "à", $valor);
    $valor = str_replace("\u00e1", "á", $valor);
    $valor = str_replace("\u00e2", "â", $valor);
    $valor = str_replace("\u00e3", "ã", $valor);
    $valor = str_replace("\u00e4", "ä", $valor);
    $valor = str_replace("\u00e5", "å", $valor);
    $valor = str_replace("\u00e6", "æ", $valor);
    $valor = str_replace("\u00e7", "ç", $valor);
    $valor = str_replace("\u00e8", "è", $valor);
    $valor = str_replace("\u00e9", "é", $valor);
    $valor = str_replace("\u00ea", "ê", $valor);
    $valor = str_replace("\u00eb", "ë", $valor);
    $valor = str_replace("\u00ec", "ì", $valor);
    $valor = str_replace("\u00ed", "í", $valor);
    $valor = str_replace("\u00ee", "î", $valor);
    $valor = str_replace("\u00ef", "ï", $valor);
    $valor = str_replace("\u00f0", "ð", $valor);
    $valor = str_replace("\u00f1", "ñ", $valor);
    $valor = str_replace("\u00f2", "ò", $valor);
    $valor = str_replace("\u00f3", "ó", $valor);
    $valor = str_replace("\u00f4", "ô", $valor);
    $valor = str_replace("\u00f5", "õ", $valor);
    $valor = str_replace("\u00f6", "ö", $valor);
    $valor = str_replace("\u00f8", "ø", $valor);
    $valor = str_replace("\u00f9", "ù", $valor);
    $valor = str_replace("\u00fa", "ú", $valor);
    $valor = str_replace("\u00fb", "û", $valor);
    $valor = str_replace("\u00fc", "ü", $valor);
    $valor = str_replace("\u00fd", "ý", $valor);
    $valor = str_replace("\u00ff", "ÿ", $valor);
    return $valor;
}

?>