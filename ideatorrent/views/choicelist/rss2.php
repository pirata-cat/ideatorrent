<?php

/*
Copyright (C) 2007 Nicolas Deschildre <ndeschildre@gmail.com>

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

echo "<?xml version=\"1.0\"?>"; ?>

<rss version="2.0">
  <channel>
    <title><![CDATA[<?php 
if($this->view_options['page_title'] != null) 
	echo $this->view_options['page_title']; 
else
	echo $this->_data->title; ?>]]></title>
    <link><?php echo $GLOBALS['basemodule_url']; ?></link>
    <description><![CDATA[<?php echo ""; ?>]]></description>
    <language>en-us</language>
    <pubDate><?php echo date("r"); ?></pubDate>
    <lastBuildDate><?php echo date("r"); ?></lastBuildDate>
    <generator>QAPoll module</generator>
 
<?php for ($i = 0; $i < count($this->_data->items); $i++) : ?>

<?php
$this->item =& $this->_data->items[$i];
echo $this->loadNonThemedTemplate("choicelist/", "rss2", "item");
?>

<?php endfor; ?>

  </channel>
</rss>

