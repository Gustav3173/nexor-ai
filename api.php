<?php
$apiKey = "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";

$dados = file_get_contents("php://input");

$ch = curl_init("https://api.groq.com/openai/v1/chat/completions");
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dados);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
  "Authorization: Bearer $apiKey",
  "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

echo curl_exec($ch);
?>
