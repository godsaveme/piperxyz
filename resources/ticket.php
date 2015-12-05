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
							$printer -> text("Ticket N°: 60");
							$printer -> feed();
							$printer -> text("Fecha y Hora: 2015-12-05 12:09:38\n");
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


							$printer -> text("------------------------------------------\n");$printer -> feed();$printer -> setJustification(Escpos::JUSTIFY_CENTER);$printer -> text("¡Llene sus datos y deposite este ticket en las ánforas para el sorteo navideño!\n");$printer -> feed();$printer -> selectPrintMode();$printer -> text("Nombres/Rzon Soc.:__________________________________________________________________\n");$printer -> text("Direcc.:__________________________________\n");$printer -> text("DNI/RUC.:_________________________________\n");$printer -> text("Teléfono.:________________________________\n");$printer -> text("Correo.:__________________________________\n");$printer -> feed();$printer -> text("Fecha de Impr.: 05-12-2015 12:09:38\n");$printer -> text("<<No válido como documento contable>>\n");$printer -> feed();$printer -> cut();$printer -> close();