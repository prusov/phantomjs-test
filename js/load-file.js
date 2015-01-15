var fs = require('fs');
var system = require('system');

var fileName = '/mnt/test/load-file.js';
if (fs.exists(fileName)) {
    system.stdout.write(fs.read(fileName));
    phantom.exit(0);
} else {
    system.stderr.write('File is not exist!');
    phantom.exit(1);
}

