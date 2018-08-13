<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/**
* 
*/
class ListProp
{
    const NAME_ELEMENT='Обозначение изделия';
    static $all_prop_name;
    public $row;
    function __construct($prop, $name)
    {   
        $this->row['NAME']=$name;
        self::$all_prop_name[self::NAME_ELEMENT]='NAME';
        foreach ($prop as $key => $value) {
            if ($value['VALUE']) {
                self::$all_prop_name[$value['NAME']]=$value['CODE'];
                $this->row[$value['CODE']]=$value['VALUE'];
            }
            
            
        }
       
    }
   static function get_all_prop_name()
    {
        return self::$all_prop_name;
    }
    function get_row()
    {
        return  $this->row;
    }

    static function drow_table($object_colection)
    {
            // отрисовка заголовков
            echo ' <table class="catalog-list">
                            <thead>
                                <tr>';
                                foreach (self::$all_prop_name as $key => $value) {
                                   echo "<td> $key</td>";
                                }                                                                
                            echo '</tr>
                            </thead>

                            <tbody>';
                        foreach ($object_colection as $object) {
                            echo "<tr>";
                             foreach (self::$all_prop_name as $key => $value) {
                                if (is_array($object->row[$value])) {
                                     echo "<td>";
                                    foreach ($object->row[$value] as $val) {
                                      echo $val;
                                    }
                                    echo "</td>";
                                }else{
                                    echo "<td>".$object->row[$value]."</td>";
                                }
                             }
                             echo "</tr>";

                        }
                        echo "          </tbody> 
                    </table>";
        
    }
}
?>

            <section class="section-margin">
                <div class="container">
                    <p class="table-resp__tip">Для просмотра смахните вбок</p>
                    <div class="table-resp">
                       


<?


	foreach ($arResult['ITEMS'] as $key => $arItem){

		$resp= CIBlockElement::GetList(Array(), array("IBLOCK_ID" => $arItem['IBLOCK_ID'], "ID"=>$arItem['ID']));
		if($obs = $resp->GetNextElement()){
			$arProps = $obs->GetProperties();
			// $arFields = $obs->GetFields();
            $object_colection[]=new ListProp($arProps,$arItem['NAME']);
		}
       
       }
        ListProp::drow_table($object_colection);

?>




<?
	
?>

                    </div>
                </div>

            </section>

            <div class="text-center section-margin">
                <a class="btn_buy">Отправить online-заказ</a>
            </div>
