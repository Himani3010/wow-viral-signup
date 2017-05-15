<?php
global $wpdb;
$table_wow_signup = $wpdb->prefix . "wow_signup";
$info = (isset($_REQUEST["info"])) ? $_REQUEST["info"] : '';
if ($info == "saved") {
    echo "<div class='updated' id='message'><p><strong>".__("Record Added", "wow-marketings")."</strong>.</p></div>";
}
if ($info == "update") {
    echo "<div class='updated' id='message'><p><strong>".__("Record Updated", "wow-marketings")."</strong>.</p></div>";
}
if ($info == "del") {
    $delid = $_GET["did"];
    $wpdb->query("delete from " . $table_wow_signup . " where id=" . $delid);
    echo "<div class='updated' id='message'><p><strong>".__("Record Deleted", "wow-marketings").".</strong>.</p></div>";
}
$resultat = $wpdb->get_results("SELECT * FROM " . $table_wow_signup . " order by id asc");
$count = count($resultat);
?>
<div class="wow">
<h1><?php esc_attr_e("Wow Viral Signups Pro", "wow-marketings") ?></h1>
<ul class="wow-admin-menu">
<li><a href='admin.php?page=wow-viral-signups-pro'><?php esc_attr_e("List", "wow-marketings") ?></a></li>	
<li><a href='admin.php?page=wow-viral-signups-pro&wow=add' ><?php esc_attr_e("Add new", "wow-marketings") ?></a></li>
<li><a href='admin.php?page=wow-viral-signups-pro&wow=signed'><?php esc_attr_e("Signed-up Users", "wow-marketings") ?></a></li>
<li><a href='admin.php?page=wow-viral-signups-pro&wow=license' ><?php esc_attr_e("License", "wow-marketings") ?></a></li>
</ul>