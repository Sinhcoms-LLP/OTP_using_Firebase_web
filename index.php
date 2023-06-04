<?php require('config.php'); ?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Firebase - Phone Number OTP Authentication</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" style="max-width:361px;">
<div class="card" id="o" style="margin-top: 10px">
<div class="card-header">Phone Number</div>
<div class="card-body">
<div class="alert alert-danger" id="error" style="display: none;"></div>
<div class="alert alert-success" id="successAuth" style="display: none;"></div>
<form>
<input type="text" id="number" class="form-control" placeholder="i.e: +12151234567">
<div id="recaptcha-container" class="mt-2"></div>
<button type="button" class="btn btn-primary mt-3" onclick="sendOTP();">Send OTP</button>
</form>
</div>
</div>            
<div class="card" id="v" style="margin-top: 10px;display:none;">
<div class="card-header" id="vc">Verification code</div>
<div class="card-body">
<div class="alert alert-success" id="successOtpAuth" style="margin-bottom: 0;display: none;"></div>
<form id="as">
<input type="text" id="verification" class="form-control" placeholder="Verification code">
<button type="button" class="btn btn-success mt-3" onclick="verify()">Verify code</button>
</form>
</div>
</div>
</div>
</body>
</html>
