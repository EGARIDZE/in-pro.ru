<?php

foreach ($arResult['ITEMS'] as &$item){
    foreach ($item['PROPERTIES']['TEG']['VALUE'] as $v) {
        $res = \CIBlockSection::GetByID($v);
        if ($ar_res = $res->GetNext())
            $item['TEG_CODES'][] = $ar_res['CODE'];
    }
}
