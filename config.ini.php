; <?php exit; ?> DO NOT REMOVE THIS LINE
; file automatically generated or modified by Piwik; you can manually override the default values in global.ini.php by redefining them in this file.
<?php 
  // This will parse the values from DATABASE_URL if present (true on dokku, 
  // once you link a database to your app
  if ($_ENV['DATABASE_URL'] != null) {
    $u = parse_url($_ENV['DATABASE_URL']);

    $db_host = $u['host'];
    $db_user= $u['user'];
    $db_pass= $u['pass'];
    $db_name = $u['path'];
    $db_port = $u['port'];
  }
  else {
    $db_host = $_ENV['DB_HOST'];
    $db_user= $_ENV['DB_USERNAME'];
    $db_pass= $_ENV['DB_PASSWORD'];
    $db_name = $_ENV['DB_NAME'];
    $db_port = $_ENV['DB__PORT'];
  }
?>

[database]
host = <?php $db_host; ?>
username = <?php $db_user; ?>
password = <?php $db_pass; ?>
dbname = <?php $db_name; ?>
tables_prefix = <?php $_ENV['DB_PREFIX']; ?>
port = <?php $db_port; ?>
charset = "utf8"

[General]
salt = "#SECRET_TOKEN"
session_save_handler = dbtable

[PluginsInstalled]
PluginsInstalled[] = "Diagnostics"
PluginsInstalled[] = "Login"
PluginsInstalled[] = "CoreAdminHome"
PluginsInstalled[] = "UsersManager"
PluginsInstalled[] = "SitesManager"
PluginsInstalled[] = "Installation"
PluginsInstalled[] = "Monolog"
PluginsInstalled[] = "CorePluginsAdmin"
PluginsInstalled[] = "CoreHome"
PluginsInstalled[] = "CoreVisualizations"
PluginsInstalled[] = "Proxy"
PluginsInstalled[] = "API"
PluginsInstalled[] = "ExamplePlugin"
PluginsInstalled[] = "Widgetize"
PluginsInstalled[] = "Transitions"
PluginsInstalled[] = "LanguagesManager"
PluginsInstalled[] = "Actions"
PluginsInstalled[] = "Dashboard"
PluginsInstalled[] = "MultiSites"
PluginsInstalled[] = "Referrers"
PluginsInstalled[] = "UserSettings"
PluginsInstalled[] = "UserLanguage"
PluginsInstalled[] = "DevicesDetection"
PluginsInstalled[] = "Goals"
PluginsInstalled[] = "Ecommerce"
PluginsInstalled[] = "SEO"
PluginsInstalled[] = "Events"
PluginsInstalled[] = "UserCountry"
PluginsInstalled[] = "VisitsSummary"
PluginsInstalled[] = "VisitFrequency"
PluginsInstalled[] = "VisitTime"
PluginsInstalled[] = "VisitorInterest"
PluginsInstalled[] = "ExampleAPI"
PluginsInstalled[] = "ExampleRssWidget"
PluginsInstalled[] = "Provider"
PluginsInstalled[] = "Feedback"
PluginsInstalled[] = "CoreUpdater"
PluginsInstalled[] = "CoreConsole"
PluginsInstalled[] = "ScheduledReports"
PluginsInstalled[] = "UserCountryMap"
PluginsInstalled[] = "Live"
PluginsInstalled[] = "CustomVariables"
PluginsInstalled[] = "PrivacyManager"
PluginsInstalled[] = "ImageGraph"
PluginsInstalled[] = "Annotations"
PluginsInstalled[] = "MobileMessaging"
PluginsInstalled[] = "Overlay"
PluginsInstalled[] = "SegmentEditor"
PluginsInstalled[] = "Insights"
PluginsInstalled[] = "ZenMode"
PluginsInstalled[] = "LeftMenu"
PluginsInstalled[] = "Morpheus"
PluginsInstalled[] = "Contents"
PluginsInstalled[] = "BulkTracking"
PluginsInstalled[] = "Resolution"
PluginsInstalled[] = "DevicePlugins"
