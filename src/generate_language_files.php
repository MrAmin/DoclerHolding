<?php
namespace Language;
chdir(__DIR__);
require 'LanguageBatchBo.php';

$languageBatchBo = new LanguageBatchBo();
$languageBatchBo->generateLanguageFiles();
$languageBatchBo->generateAppletLanguageXmlFiles();