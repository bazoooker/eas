
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($arResult['DETAIL_PICTURE']['WIDTH']<600) {
			$file=$arResult['DETAIL_PICTURE']['SRC'];
} else {
			$file=CFile::ResizeImageGet($arResult['DETAIL_PICTURE'], array('width'=>600, 'height'=>600), BX_RESIZE_IMAGE_PROPORTIONAL_ALT , true); 
}
if(!$file['src']) $file['src']="/img/no-photo.png";


$resp= CIBlockElement::GetList(Array(), array("IBLOCK_ID" => $arResult['IBLOCK_ID'], "ID"=>$arResult['ID']));
	while($obs = $resp->GetNextElement()){
		$arProps = $obs->GetProperties();
		$arFields = $obs->GetFields();
}
?>




                    <h2><?=$arResult['NAME']?></h2>

                    <div class="product-list-controls">

<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", Array(
	"START_FROM" => "2",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>


                        
                    </div>

                        <div class="product-detail">



                            <div class="product-detail__left">
                                <div class="product-detail__img" style="background-image: url(<?=$arResult['DETAIL_PICTURE']['SRC']?>);"></div>
                                <div class="product_fake section-margin">
                                    <div class="text-center">                                
                                        <div class="icon icon_help"></div>
                                        <p>Нужна помощь <br>в выборе?</p>
                                        <a href="#" class="callbackbutton btn btn_outline">Задать вопрос менеджеру</a>
                                    </div>
                                </div>
                            </div>    



                            <div class="product-detail__right">

                                <div class="product-detail-heading">
                                    <div class="product-detail-heading__main-info">
                                        <div class="product-detail-heaading__price">
                                            <?=$arResult['PRICES']['Оптовая']['PRINT_VALUE_VAT']?>
                                        </div>

                                        <div class="product-detail-heading__controls">
                                            <a href="#" id="<?=$arResult['ID']?>" name="<?=$arResult['NAME']?>" class="btn btn_add-to-cart">в корзину</a>
                                            <a href="#" class="btn btn_one-click"  name="<?=$arResult['NAME']?>">
                                                <span>Купить в 1 клик</span>
                                            </a>
                                        </div>                                
					<ul class=service-func>
						<li><a id=comparelink href="#" rel="<?=$arResult['ID']?>">Добавить к списку сравнения</a>
						<li><a id=delaylink href="#" rel="<?=$arResult['ID']?>">Отложить</a>
					</ul>
                                    </div>                                     

                                    <div class="product-detail-heading__logo" >
                                        <div class="product-logo" style="background-image: url(/img/icons/brands/makita.jpg);"></div>
                                    </div>

                                </div>

                                <div class="product-detail__text">
									<?
									if ($arResult['DETAIL_TEXT']) {
										echo $arResult['DETAIL_TEXT'];
									}else{
										echo $arResult['PREVIEW_TEXT'];
									}
									?>
                                </div>
                                <div class="product-detail__table">
                                    <table>
                                        <tr>
                                            <td>Тип электростанции</td>
                                            <td>бензиновая</td>
                                        </tr>
                                        <tr>
                                            <td>Тип запуска</td>
                                            <td>ручной</td>
                                        </tr>
                                        <tr>
                                            <td>Число фаз</td>
                                            <td>1(220 вольт)</td>
                                        </tr>
                                        <tr>
                                            <td>Двигатель</td>
                                            <td>Robin Subaru EX17D</td>
                                        </tr>
                                        <tr>
                                            <td>Объем двигателя</td>
                                            <td>169 куб.см</td>
                                        </tr>
                                        <tr>
                                            <td>Число цилиндров</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>Число тактов</td>
                                            <td>4</td>
                                        </tr>
                                        <tr>
                                            <td>Тип охлаждения</td>
                                            <td>Воздушное</td>
                                        </tr>
                                        <tr>
                                            <td>Марка бензина</td>
                                            <td>АИ-92</td>
                                        </tr>
                                        <tr>
                                            <td>Объем бака</td>
                                            <td>12.8 л</td>
                                        </tr>
                                    </table>
                                </div>

                            </div> 




                        </div>






				



