<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Bank Transfer fee';
$_['heading_getting_started']              = 'Introducción';
$_['heading_setup']                        = 'Configuración de Bank Transfer fee';
$_['heading_faq']                          = 'Preguntas Frecuentes';
$_['heading_contact']                      = 'Contacto de Soporte';

// Text
$_['text_extension']                       = 'Extensiones';
$_['text_success']                         = 'Éxito: ¡Has modificado Bank Transfer fee!';
$_['text_edit']                            = 'Editar Bank Transfer fee';
$_['text_getting_started']                 = '<p><strong>Resumen:</strong> El Cargo por Transferencia Bancaria de Playful Sparkle para OpenCart 3.x permite a los propietarios de tiendas agregar un cargo configurable a los pedidos que utilizan el método de pago por Transferencia Bancaria. Esta función ayuda a compensar las tarifas de procesamiento de transferencias bancarias y proporciona un mayor control sobre los totales de los pedidos.</p><p><strong>Requisitos:</strong> OpenCart 3.x+, PHP 7.3 o superior y el método de pago por Transferencia Bancaria habilitado en la configuración de la tienda.</p>';
$_['text_setup']                           = '<p>Para configurar, ingrese el monto del cargo deseado (incluido el impuesto), seleccione la clase impositiva correspondiente y habilite la extensión. El cargo se aplicará automáticamente y se ajustará a la configuración fiscal de su tienda, recalculando el cargo neto según la tasa impositiva especificada. Por ejemplo, si el cargo está configurado en 5 EUR y la tasa de impuesto es del 20%, el cargo se recalculará a 4.17 EUR (neto) al finalizar la compra.</p>';
$_['text_faq']                             = '<details><summary>¿El monto del cargo se ingresa con o sin impuestos?</summary>El monto del cargo debe ingresarse con impuestos incluidos. La extensión recalculará automáticamente el monto neto según la configuración fiscal de la tienda; por ejemplo, un cargo de 5 EUR con una tasa de impuesto del 20% se ajustará a 4.17 EUR (neto) al finalizar la compra.</details><details><summary>¿Puedo aplicar diferentes cargos para otros métodos de pago?</summary>No, esta extensión solo se aplica a los pedidos que utilizan el método de pago por Transferencia Bancaria.</details><details><summary>¿El cargo se mostrará de forma separada en el resumen del pedido?</summary>Sí, el cargo se mostrará como un ítem separado en el resumen del pedido durante el proceso de compra, con ajustes fiscales según la configuración fiscal de la tienda.</details>';
$_['text_contact']                         = '<p>Para obtener más ayuda, por favor contacta a nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación para el Usuario</a></li></ul>';

// Tab
$_['tab_general']                          = 'General';
$_['tab_help_and_support']                 = 'Ayuda &amp; Soporte';

// Entry
$_['entry_fee']                            = 'Comisión';
$_['entry_tax_class']                      = 'Clase de Impuesto';
$_['entry_status']                         = 'Estado';
$_['entry_sort_order']                     = 'Orden de Clasificación';

// Error
$_['error_total_ps_bank_transfer_fee_fee'] = 'La tarifa no puede estar vacía ni ser menor o igual a cero';

// Error
$_['error_permission']                     = 'Advertencia: ¡No tienes permiso para modificar Bank Transfer fee!';
