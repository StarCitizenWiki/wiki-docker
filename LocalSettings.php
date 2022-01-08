<?php
# This file was automatically generated by the MediaWiki 1.35.2
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

$wgWikiConfigPath = __DIR__ . '/../config';

## Uncomment this to disable output compression
### Causes issues behind Caches
$wgDisableOutputCompression = true;

$wgSitename = "Star Citizen Wiki";
$wgMetaNamespace = "Star_Citizen_Wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = '';
$wgUploadPath = 'https://cdn.star-citizen.wiki/images';

## The protocol and server name to use in fully-qualified URLs
$wgServer = '//star-citizen.wiki';
$wgCanonicalServer = 'https://star-citizen.wiki';
$wgEnableCanonicalServerLink = true;
$wgSecureLogin = true;

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## Thumb stuff
$wgShowArchiveThumbnails = false;
$wgThumbnailScriptPath = "{$wgScriptPath}/thumb.php";
$wgGenerateThumbnailOnParse = false;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
    'icon' => "$wgUploadPath/favicon.png",
    '1x' => "$wgUploadPath/thumb/e/ef/Star_Citizen_Wiki_Logo.png/320px-Star_Citizen_Wiki_Logo.png",
    '2x' => "$wgUploadPath/thumb/e/ef/Star_Citizen_Wiki_Logo.png",
    'svg' => "$wgUploadPath/c/c6/Star_Citizen_Wiki_Logo_Stern.svg",
];

$wgLogo = $wgLogos['1x'];
$wgFavicon = "$wgUploadPath/favicon.png";

## E-Mail
require_once "$wgWikiConfigPath/system/mail.php";

## Database settings
require_once "$wgWikiConfigPath/system/db.php";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

## Shared memory settings
require_once "$wgWikiConfigPath/system/cache.php";

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
$wgSVGConverter = 'rsvg';
$wgUploadDialog['fields']['categories'] = true;
$wgUploadDialog['comment'] = '$PAGENAME';
$wgUploadDialog['format']['categories'] = '$CATEGORIES';
$wgUploadDialog['format']['uncategorized'] = 'Datei mit fehlender Kategorie';

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "de";

$wgSecretKey = "";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
#$wgUpgradeKey = "";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = 'Star_Citizen_Wiki:Urheberrechte'; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = 'https://creativecommons.org/licenses/by-nc-sa/4.0/';
$wgRightsText = 'Creative Commons BY-NC-SA 4.0';
$wgRightsIcon = "$wgScriptPath/resources/assets/licenses/cc-by-nc-sa.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = '/usr/bin/diff3';

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = 'citizen';

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'Citizen' );

# Seiten
$wgWantedPagesThreshold = 2;

# Debug
$wgShowExceptionDetails = false;
$wgShowDBErrorBacktrace = false;
#$wgDebugLogFile = "/tmp/debug-{$wgDBname}.log";

# Footer
unset($wgFooterIcons['poweredby']);

# Groups
require_once "$wgWikiConfigPath/permissions/groups.php";

# Jobs
$wgJobRunRate = 0;

# Links
$wgExternalLinkTarget = '_blank';
$wgUrlProtocols[] = "ts3server://";

# Namespaces
define('NS_COMMLINK', 3100);
define('NS_COMMLINK_TALK', 3101);
define('NS_TRANSCRIPT', 3110);
define('NS_TRANSCRIPT_TALK', 3111);
define('NS_ORGANISATION', 3120);
define('NS_ORGANISATION_TALK', 3121);
define('NS_COMMUNITY_CONTENT', 3130);
define('NS_COMMUNITY_CONTENT_TALK', 3131);

$wgExtraNamespaces[NS_COMMLINK] = "Comm-Link";
$wgExtraNamespaces[NS_COMMLINK_TALK] = "Comm-Link_Diskussion";
$wgExtraNamespaces[NS_TRANSCRIPT] = "Transkript";
$wgExtraNamespaces[NS_TRANSCRIPT_TALK] = "Transkript_Diskussion";
$wgExtraNamespaces[NS_ORGANISATION] = "Organisation";
$wgExtraNamespaces[NS_ORGANISATION_TALK] = "Organisation_Diskussion";
$wgExtraNamespaces[NS_COMMUNITY_CONTENT] = "Community_Content";
$wgExtraNamespaces[NS_COMMUNITY_CONTENT_TALK] = "Community_Content_Diskussion";

$wgContentNamespaces[] = NS_COMMLINK;
$wgContentNamespaces[] = NS_TRANSCRIPT;
$wgContentNamespaces[] = NS_ORGANISATION;
$wgContentNamespaces[] = NS_COMMUNITY_CONTENT;

$wgArticleCountMethod = 'any';

# Notifications
$wgUsersNotifiedOnAllChanges = [
	'FoXFTW',
	'Michael Corleone'
];

# Sitemap
$wgSitemapNamespaces = [
	NS_MAIN,
	NS_USER,
	NS_PROJECT,
	NS_FILE,
	NS_HELP,
	102,
	108,
	NS_COMMLINK,
	NS_TRANSCRIPT,
	NS_ORGANISATION,
	NS_COMMUNITY_CONTENT,
];

# Server Config
$wgArticlePath = "/$1";
$wgUsePathInfo = true;

require_once "$wgWikiConfigPath/system/action_paths.php";

$wgRawHtml = false;

# Shell Config
$wgMaxShellMemory = 2097152; // 2GB
$wgMaxShellFileSize = 1048576; // 1GB
$wgMaxShellTime = 180; // 3 Minutes

# Subpages
$wgNamespacesWithSubpages[NS_MAIN] = true;
$wgNamespacesWithSubpages[NS_TEMPLATE] = true;
$wgNamespacesWithSubpages[NS_USER] = true;
$wgRestrictDisplayTitle = false;

# Timezone
$wgLocaltimezone = "Europe/Berlin";
date_default_timezone_set($wgLocaltimezone);

# Upload / Images
$wgMaxUploadSize = [
    '*' => 1024 * 1024 * 1000 * 2, // 100 MB
    'url' => 1024 * 1024 * 50, // 20 MB
];
$wgMaxImageArea = 3.6e7;
$wgThumbnailEpoch = '20191118000000';
# Gallery settings
$wgGalleryOptions = [
  'imagesPerRow' => 0, // Default number of images per-row in the gallery. 0: Adapt to screensize
  'imageWidth' => 180, // Width of the cells containing images in galleries (in "px")
  'imageHeight' => 180, // Height of the cells containing images in galleries (in "px")
  'captionLength' => true, // Length of caption to truncate (in characters) in special pages or when the showfilename parameter is used
                           // A value of 'true' will truncate the filename to one line using CSS.
                           // Deprecated since 1.28. Default value of 25 before 1.28.
  'showBytes' => true, // Show the filesize in bytes in categories
  'mode' => 'packed', // One of "traditional", "nolines", "packed", "packed-hover", "packed-overlay", "slideshow" (1.28+)
];

# Locations
$wgFFmpegLocation = '/usr/bin/ffmpeg';
$wgPdfProcessor = '/usr/bin/ghostscript';
$wgPdfInfo = '/usr/bin/pdfinfo';
$wgPdftoText = '/usr/bin/pdftotext';

# robots
$wgDefaultRobotPolicy = 'index,follow';

# End of automatically generated settings.
# Add more configuration options below.

# WebP - Needs to be loaded pre include
#require_once "$wgWikiConfigPath/extensions/config/webp.php";

# Extensions
require_once "$wgWikiConfigPath/extensions/load_extensions.php";

# Apiunto
require_once "$wgWikiConfigPath/extensions/config/apiunto.php";

# Approved Revs
require_once "$wgWikiConfigPath/extensions/config/approvedrevs.php";

# Captcha
require_once "$wgWikiConfigPath/extensions/config/captcha.php";

# CirrusSearch
require_once "$wgWikiConfigPath/extensions/config/cirrussearch.php";

# CloudFlare
require_once "$wgWikiConfigPath/extensions/config/cloud_flare.php";

# CodeEditor
require_once "$wgWikiConfigPath/extensions/config/code_editor.php";

# CookieWarning
require_once "$wgWikiConfigPath/extensions/config/cookiewarning.php";

# CommonsMetadata
$wgCommonsMetadataForceRecalculate = true;

# Discussion Tools
require_once "$wgWikiConfigPath/extensions/config/discussion_tools.php";

# DiscordNotifications
require_once "$wgWikiConfigPath/extensions/config/discord_notifications.php";

# EmbedVideo
require_once "$wgWikiConfigPath/extensions/config/embedvideo.php";

# Flow - Unknown Content Handler as the Extension is removed
$wgContentHandlers['flow-board'] = 'UnknownContentHandler';

# Json Config
require_once "$wgWikiConfigPath/extensions/config/json_config.php";

# MultimediaViewer
require_once "$wgWikiConfigPath/extensions/config/multimediaviewer.php";

# OAuth
require_once "$wgWikiConfigPath/extensions/config/oauth.php";

# PageImages
require_once "$wgWikiConfigPath/extensions/config/pageimages.php";

# ParserFunctions
$wgPFEnableStringFunctions = false;
$wgPFStringLengthLimit = 1500;

# PDF Handler
require_once "$wgWikiConfigPath/extensions/config/pdfhandler.php";

# Popups
require_once "$wgWikiConfigPath/extensions/config/popups.php";

# Plausible
require_once "$wgWikiConfigPath/extensions/config/plausible.php";

# RelatedArticles
require_once "$wgWikiConfigPath/extensions/config/related_articles.php";

# Scribunto
require_once "$wgWikiConfigPath/extensions/config/scribunto.php";

# SMW
require_once "$wgWikiConfigPath/extensions/config/semanticmediawiki.php";

# TemplateData
$wgTemplateDataUseGUI = true;

# TextExtracts
$wgExtractsExtendOpenSearchXml = true;

# TitleBlacklist
require_once "$wgWikiConfigPath/extensions/config/titleblacklist.php";

# Translate
require_once "$wgWikiConfigPath/extensions/config/translate.php";

# Upload Wizard
require_once "$wgWikiConfigPath/extensions/config/uploadwizard.php";

# Visual Editor
require_once "$wgWikiConfigPath/extensions/config/visualeditor.php";

# WikiSEO
require_once "$wgWikiConfigPath/extensions/config/wikiseo.php";

# WikiSEO
require_once "$wgWikiConfigPath/extensions/config/ws_search.php";

# Skin Citizen
require_once "$wgWikiConfigPath/skins/citizen.php";
