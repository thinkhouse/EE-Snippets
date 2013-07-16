// General
{exp:channel:entries channel="your-channel-name"}
{/exp:channel:entries}



// Images
{exp:channel_images:images entry_id="{entry_id}" limit="1"}
<img src="{image:url:small}" /></a>
{/exp:channel_images:images}


// Grid
{your_field}
<li><a href="{link}" class="square-border-btn" target="_blank">{title}</a></li>
{/your_field}


// Categories
{categories}
{category_name}
{/categories}

// Embed
{embed="bord_gais/head"}

// Link to styles
<link rel="stylesheet" href="{site_url}assets/master/css/styles.css">