<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Bank Transfer fee';
$_['heading_getting_started']              = 'Introduzione';
$_['heading_setup']                        = 'Configurazione della Commissione per Bonifico Bancario';
$_['heading_faq']                          = 'Domande Frequenti';
$_['heading_contact']                      = 'Contatta il Supporto';

// Text
$_['text_extension']                       = 'Estensioni';
$_['text_success']                         = 'Successo: Hai modificato la commissione per il bonifico bancario!';
$_['text_edit']                            = 'Modifica la Commissione per Bonifico Bancario';
$_['text_getting_started']                 = '<p><strong>Panoramica:</strong> La Playful Sparkle - Commissione per Bonifico Bancario per OpenCart 3.x consente ai proprietari del negozio di aggiungere una commissione configurabile agli ordini che utilizzano il metodo di pagamento tramite bonifico bancario. Questa funzionalità aiuta a compensare le spese di elaborazione del bonifico bancario e offre un maggiore controllo sui totali dell’ordine.</p><p><strong>Requisiti:</strong> OpenCart 3.x+, PHP 7.3 o superiore e il metodo di pagamento Bonifico Bancario attivato nelle impostazioni del negozio.</p>';
$_['text_setup']                           = '<p>Per configurare, inserire l’importo desiderato della commissione (comprensivo di IVA), selezionare la classe fiscale appropriata e abilitare l’estensione. La commissione si applicherà automaticamente e si adeguerà alle impostazioni fiscali del negozio, ricalcolando la commissione netta in base all’aliquota fiscale specificata. Ad esempio, se la commissione è impostata a 5 EUR e l’aliquota fiscale è del 20%, la commissione sarà ricalcolata a 4,17 EUR (netto) al momento del checkout.</p>';
$_['text_faq']                             = '<details><summary>L’importo della commissione va inserito con o senza IVA?</summary>L’importo della commissione deve essere inserito comprensivo di IVA. L’estensione ricalcolerà automaticamente l’importo netto in base alle impostazioni fiscali del negozio; ad esempio, una commissione di 5 EUR con un’aliquota fiscale del 20% sarà adeguata a 4,17 EUR (netto) al checkout.</details><details><summary>Posso applicare commissioni differenti per altri metodi di pagamento?</summary>No, questa estensione si applica solo agli ordini che utilizzano il metodo di pagamento tramite bonifico bancario.</details><details><summary>La commissione apparirà separatamente nel riepilogo dell’ordine?</summary>Sì, la commissione apparirà come voce separata nel riepilogo dell’ordine durante il checkout, con adeguamenti fiscali effettuati in base alle impostazioni fiscali del negozio.</details>';
$_['text_contact']                         = '<p>Per ulteriore assistenza, contatta il nostro team di supporto:</p><ul><li><strong>Contatto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentazione:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentazione Utente</a></li></ul>';

// Tab
$_['tab_general']                          = 'Generale';
$_['tab_help_and_support']                 = 'Assistenza e Supporto';

// Entry
$_['entry_fee']                            = 'Commissione (con IVA)';
$_['entry_tax_class']                      = 'Classe Fiscale';
$_['entry_status']                         = 'Stato';
$_['entry_sort_order']                     = 'Ordinamento';

// Error
$_['error_total_ps_bank_transfer_fee_fee'] = 'La commissione non può essere vuota, inferiore o uguale a zero';

// Error
$_['error_permission']                     = 'Attenzione: Non hai il permesso di modificare la commissione per il bonifico bancario!';
