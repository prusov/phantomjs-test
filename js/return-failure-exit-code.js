var system = require('system');

console.log('Hello, im console log');
console.error('Hello, im console error');
system.stderr.write('Hello, im fatal error!');

phantom.exit(1);