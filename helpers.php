<?php

/**
 * Get the base path
 * 
 * @param string $path
 * @return string
 */

function basePath($path = '')
{
  return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * 
 * @param  string $name
 * @return void
 */

 function loadView($name){
  $viewPath = basePath("view/{$name}.view.php");
  
  if(file_exists($viewPath)){

    require $viewPath;
  }else{
    echo "View {$viewPath} not found";
  }
 }

/**
 * Load a partial
 * 
 * @param  string $name
 * @return void
 */

 function loadPartial($name){
  $partialPath = basePath("view/partials/{$name}.php");
    if(file_exists($partialPath)){

    require $partialPath;
  }else{
    echo "View {$partialPath} not found";
  }
 }