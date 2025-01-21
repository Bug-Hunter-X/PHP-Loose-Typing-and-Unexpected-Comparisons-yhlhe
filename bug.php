function foo($bar) {
  if ($bar === null) {
    return 'null';
  } elseif ($bar === false) {
    return 'false';
  } elseif ($bar === 0) {
    return '0';
  } elseif ($bar === '0') {
    return '0';
  } elseif ($bar === '') {
    return '';
  } else {
    return 'other';
  }
}

//This will return '0'
var_dump(foo(0));

//This will also return '0'
var_dump(foo('0'));

//This will return ''
var_dump(foo(''));

//This will return 'null'
var_dump(foo(null));

//This will return 'false'
var_dump(foo(false));