<?php 

add_action('admin_menu', 'psa_adminSetup');
 
function psa_adminSetup(){
        add_menu_page( 'Psa Settings', 'Psa Settings', 'manage_options', 'psa-plugin', 'Psa_init' );
}
 
function Psa_init(){ ?>
      <table class = "plugin-istraction">
     		 <tr class = "title-insraction adminjax">
      			<td class = "adminjax">Your Shortcode</td>
      			<td class = "adminjax">Instruction</td>
      			<td class = "adminjax">You Can Also Paste it to your Template</td>
      		</tr>
      		<tr class = "adminjax">
      			<td class = "shortcode-admin adminjax">[searchformajax]</td>
      			<td class = "adminjax">You Can Put This Shortcode Wherever you want. on the editor admin</td>
      			<td class = "adminjax"> echo do_shortcode("[searchformajax]")</td>
      		</tr>
      		<tr class = "adminjax adminjax">
      			<td class = "shortcode-admin adminjax">[searchresult]</td>
      			<td class = "adminjax">This is the result for your search. You can put this wherever you want. </td>
      			<td class = "adminjax"> echo do_shortcode("[searchresult]") </td>
      		</tr>
      </table>

      <a href = "http://3volutions.co/" class = "powerdbyhash" target = "_blank">Powered by: Hassanal S. Aguam</a>

<?php }
 
?>