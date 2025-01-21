function foo($bar) {
  if ($bar === null) {
    return 'null';
  } elseif ($bar === false) {
    return 'false';
  } elseif ($bar === 0) {
    return '0 (int)';
  } elseif ($bar === '0') {
    return '0 (string)';
  } elseif ($bar === '') {
    return 'empty string';
  } else {
    return 'other';
  }
}

//This will return '0 (int)'
var_dump(foo(0));

//This will return '0 (string)'
var_dump(foo('0'));

//This will return 'empty string'
var_dump(foo(''));

//This will return 'null'
var_dump(foo(null));

//This will return 'false'
var_dump(foo(false));