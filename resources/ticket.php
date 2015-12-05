<?php require_once(dirname(__FILE__) . "/escpos-php-master/Escpos.php");
							//$logo = new EscposImage("images/productos/tostao.jpg");
							$printer = new Escpos();
							/* Print top logo */
                            $printer -> setJustification(Escpos::JUSTIFY_CENTER);
                            //$printer -> graphics($logo);
							$printer -> selectPrintMode(Escpos::MODE_DOUBLE_WIDTH);
							$printer -> text("Bienvenidos a\nLas Pirkas");
							$printer -> feed();
							$printer -> selectPrintMode();
							$printer -> setJustification(Escpos::JUSTIFY_LEFT);
							$printer -> feed();
							$printer -> text("Ticket N°: 50");
							$printer -> feed();
							$printer -> text("Fecha y Hora: 2015-12-05 11:40:12\n");
							$printer -> text("------------------------------------------\n");
							$printer -> text("Concepto: ");
                            $printer -> text("Ingreso General");
                            $printer -> feed();
                            $printer -> text("Precio Unit. S/.: ");
                            $printer -> text("3.00");
                            $printer -> feed();
                            $printer -> text("Cantidad: ");
                            $printer -> text("1");
                            $printer -> feed();
                            $printer -> text("TOTAL S/.: ");
                            $printer -> text("3.00");
                            $printer -> feed();


							$printer -> text("------------------------------------------\n");$printer -> text("Nombres/Rzon Soc.:________________________\n");$printer -> text("Direcc.:__________________________________\n");$printer -> text("DNI/RUC.:_________________________________\n");$printer -> feed();$printer -> text("Fecha de Impr.: 05-12-2015 11:40:12\n");$printer -> text("<<No válido como documento contable>>\n");$printer -> feed();$printer -> cut();$printer -> close();