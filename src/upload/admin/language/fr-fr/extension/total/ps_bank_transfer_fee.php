<?php
// Heading
$_['heading_title']                        = 'Playful Sparkle - Bank Transfer Fee';
$_['heading_getting_started']              = 'Premiers pas';
$_['heading_setup']                        = 'Configuration des frais de virement bancaire';
$_['heading_faq']                          = 'FAQ';
$_['heading_contact']                      = 'Contacter le support';

// Text
$_['text_extension']                       = 'Extensions';
$_['text_success']                         = 'Succès : Vous avez modifié les frais de virement bancaire !';
$_['text_edit']                            = 'Modifier les frais de virement bancaire';
$_['text_getting_started']                 = '<p><strong>Aperçu :</strong> L\'extension Playful Sparkle - Frais de virement bancaire pour OpenCart 3.x permet aux propriétaires de magasins d\'ajouter des frais configurables aux commandes utilisant la méthode de paiement par virement bancaire. Cette fonctionnalité aide à compenser les frais de traitement des virements bancaires et offre un meilleur contrôle sur le total des commandes.</p><p><strong>Prérequis :</strong> OpenCart 3.x+, PHP 7.3 ou supérieur, et la méthode de paiement par virement bancaire activée dans les paramètres du magasin.</p>';
$_['text_setup']                           = '<p>Pour configurer, entrez le montant des frais souhaité (y compris la taxe), sélectionnez la classe fiscale appropriée et activez l\'extension. Les frais s\'appliqueront automatiquement et s\'ajusteront aux paramètres fiscaux de votre magasin, recalculant les frais nets en fonction du taux de taxe spécifié. Par exemple, si les frais sont fixés à 5 EUR et le taux de taxe est de 20 %, les frais seront recalculés à 4,17 EUR (nets) au moment du paiement.</p>';
$_['text_faq']                             = '<details><summary>Puis-je appliquer des frais différents pour d\'autres méthodes de paiement ?</summary>Non, cette extension ne s\'applique qu\'aux commandes utilisant la méthode de paiement par virement bancaire.</details><details><summary>Les frais seront-ils affichés séparément dans le récapitulatif de la commande ?</summary>Oui, les frais seront affichés comme un élément distinct dans le récapitulatif de la commande lors du paiement, avec les ajustements fiscaux effectués selon les paramètres fiscaux du magasin.</details>';
$_['text_contact']                         = '<p>Pour toute assistance supplémentaire, veuillez contacter notre équipe de support :</p><ul><li><strong>Contact :</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation :</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentation utilisateur</a></li></ul>';

// Tab
$_['tab_general']                          = 'Général';
$_['tab_help_and_support']                 = 'Aide &amp; Support';

// Entry
$_['entry_fee']                            = 'Frais';
$_['entry_tax_class']                      = 'Classe fiscale';
$_['entry_status']                         = 'Statut';
$_['entry_sort_order']                     = 'Ordre de tri';

// Error
$_['error_total_ps_bank_transfer_fee_fee'] = 'Les frais ne peuvent pas être vides ni inférieurs ou égaux à zéro';

// Error
$_['error_permission']                     = 'Avertissement : Vous n\'avez pas l\'autorisation de modifier les frais de virement bancaire !';
