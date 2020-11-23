<?php

function dd($dump)
{
  print_r($dump);

  die();
}

function json($data)
{
  header("Content-type: application/json");

  echo json_encode($data);
}
