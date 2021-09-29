require_once '/path/to/your-project/vendor/autoload.php';
use Moometric\mooSignature;
$mooSig = new mooSignature("primaryDomain.com", "adminEmail@primaryDomain.com");
// Optionally set the path where your default service-account.json file is stored.
$mooSig->addSettingServiceAccountPath("/your/project/path/local_vars/");
// Optionally set the path where your signatures are stored.
$mooSig->addsettingSignaturePath("/your/project/path/signatures/");
