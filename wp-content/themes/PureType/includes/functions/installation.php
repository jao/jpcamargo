 <span class="boldtext">1. How do I installed PureType onto my wordpress blog? </span> 
<div class="indent"> 
  <p>There are several files included in the ZIP folder. These include wordpress theme files, plugin files, and photoshop files. To installed your wordpress theme you will first need to upload the theme/plugin files via FTP to your server. </p> 
  <p>First you are going to upload the theme folder. Inside the ZIP folder you downloaded you will see a folder named &quot;theme.&quot; Within it is a folder named &quot;PureType.&quot; Via ftp, upload the &quot;PureType&quot; folder to your Wordpress themes directory. Depending on where you installed Wordpress on your server, the wp themes folder will be located in a path similar to: /public_html/blog/wp-content/themes. </p> 
  <p>Next you need to upload the plugin files. Inside the zip folder you downloaded there will be a folder named &quot;plugin.&quot; Within this folder are several other files and folders which need to be uploaded to your Wordpress plugins directory. This directory will be located at /public_html/blog/wp-content/plugins. Once you have the plugins uploaded you will need to activate them via your Wordpress control panel. Login to your wordpress admin area and click on the &quot;plugins&quot; link. Activate the following plugins: WP Page Navi</p> 
  <p>Next you need to select PureType and make it your default theme. Click on the design link, and under the themes tab locate PureType from the selection of themes and activate it. Your blog should now be updated with your new theme. </p> 
</div> 
<span class="boldtext">2. How do I add the thumbnails to my posts? </span> 
<div class="indent"> 
  <p>PureType utilizes a script called TimThumb to automatically resize images. Whenever you make a new post you will need to add a custom field. Scroll down below the text editor and click on the &quot;custom fields&quot; link. In the &quot;Name&quot; section, input &quot;Thumbnail&quot; (this is case sensitive). In the &quot;Value&quot; area, input the url to your thumbnail image. Your image will automatically be resized and cropped. The image must be hosted on your domain. (this is to protect against bandiwdth left) </p> 
  <p><span class="style1">Important Note: You <u>must</u> CHMOD the &quot;cache&quot; folder located in the PureType directory to 777 for this script to work. You can CHMOD (change the permissions) of a file using your favorite FTP program. If you are confused try folowing <a href="http://www.siteground.com/tutorials/ftp/ftp_chmod.htm"><u>this tutorial</u></a><u>.</u> Of course instead of CHMODing the template folder (as in the tutorial) you would CHMOD the &quot;cache&quot; folder found within your theme's directory. </span></p> 
</div> 
<span class="boldtext">3. How do I add my title/logo? </span> 
<div class="indent">The logo is type-based and can be changed in the current theme options page. To access the theme options page log in to wp-admin and choose Appearances &gt;&gt; Current Theme Options. </div> 
 
<span class="boldtext">4. How do I manage advertisements on my blog? </span> 
<div class="indent">You can change the images used in each of the advertisements, as well as which URL each ad points to, through the custom option pages found in wp-admin. Once logged in to the wordpress admin panel, click &quot;Design&quot; and then &quot;Current Theme Options&quot; to reveal the various theme options. </div> 
 
<p><span class="boldtext">5. How do I set up my blog section?</span></p> 
<div class="indent"> 
    <p>ePhoto comes with the option of having a Blog section that is separate from your photos. You must choose a category to be your "Blog" category. Any posts within this "Blog" category are added to the Blog section of ePhoto. You can choose which category to use as your Blog category via the ePhot Theme Options page, under the Navigation > Categories tab.</p> 
</div> 