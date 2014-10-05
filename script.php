re('workflows.php');
$wf = new Workflows();
$query = "{query}";
$qr_url = "http://qr.liantu.com/api.php?text=";
$web_result = $qr_url.urlencode($query);

$data = $wf->request($web_result);
$json = json_decode($data);
$wf->result (1, $web_result, $web_result,$query,'icon.png','yes');

echo $wf->toxml();
