<td colspan="9">
  <?php echo __('%%id%% - %%compte_id%% - %%actif%% - %%libelle%% - %%numero_jour%% - %%credit%% - %%debit%% - %%created_at%% - %%updated_at%%', array('%%id%%' => link_to($mouvement_automatique->getId(), 'mouvement_automatique_edit', $mouvement_automatique), '%%compte_id%%' => $mouvement_automatique->getCompteId(), '%%actif%%' => get_partial('mouvement_automatique/list_field_boolean', array('value' => $mouvement_automatique->getActif())), '%%libelle%%' => $mouvement_automatique->getLibelle(), '%%numero_jour%%' => $mouvement_automatique->getNumeroJour(), '%%credit%%' => $mouvement_automatique->getCredit(), '%%debit%%' => $mouvement_automatique->getDebit(), '%%created_at%%' => false !== strtotime($mouvement_automatique->getCreatedAt()) ? format_date($mouvement_automatique->getCreatedAt(), "f") : '&nbsp;', '%%updated_at%%' => false !== strtotime($mouvement_automatique->getUpdatedAt()) ? format_date($mouvement_automatique->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>