<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div class="department-information">
    <h3><?php print $adress['company_name']; ?></h3>
    <ul>
        <li><label><?php print t('Adres') ?> </label><div class="contact-item"><?php print  $adress['street'].' '.$adress['street_nr']; ?></div></li>
        <li><label><?php print t('Postcode') ?> </label><div class="contact-item"><?php print $adress['postal_code']; ?></div></li>
        <li><label><?php print t('Plaats') ?> </label><div class="contact-item"><?php print $adress['city']; ?></div></li>
        <li><label><?php print t('Telefoon') ?> </label><div class="contact-item"><?php print $adress['phone']; ?></div></li>
        <li><label><?php print t('Email') ?> </label><div class="contact-item"><?php print $adress['email']; ?></div></li>
   <?php if(!empty($adress['website'])){ ?>
   <li><label><?php print t('Website') ?> </label><div class="contact-item"><?php print l($adress['website'], 'http://'.$adress['website'], array('external'=>true)); ?></div></li>
      
       
   <?php } ?>
    </ul>
</div>