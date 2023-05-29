<?php
foreach (new DirectoryIterator(__DIR__) as $file) {
  if ($file->isFile()) {
      print $file->getFilename() . "<br>";
  }
}