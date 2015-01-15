# phantomjs-test
Test working with phantomjs from php

```bash
antonprusov-2:phantomjs-test anton$ ./test.php 
Test execute non existent js
--------------------
Successful: 0
Process exit code: 255
Process stderr: 
Cannot open '/mnt/test/non-existent.js'

Process stdout: 

Test successful js
--------------------
Successful: 1
Process exit code: 0
Process stderr: 
Hello, system.stderr.write!
Hello, system.stderr.writeLine!

Process stdout: 
Hello, system.stdout.write!
Hello, system.stdout.writeLine!
system.stdin.readLine(): 
""
system.stdin.read(5): (ctrl+D to end)
""

```
