var FtpDeploy = require('../wp-theme/node_modules/ftp-deploy');
var ftpDeploy = new FtpDeploy();

var config = {
    username: "swissco8",
    password: "SwisscomSharespace$1",
    host: "s022.cyon.net",
    port: 21,
    localRoot: "../wp-theme",
    remoteRoot: "/public_html/wp-content/themes/sharespace/",
    include: ['_static/build/scripts.min.js', '_static/build/styles.min.css'],
    exclude: ['_static/*', '**/.DS_Store', 'npm_debug.log', 'node_modules', 'app/frontend', 'NxModule/**/*.js', 'NxModule/**/*.scss', 'package.json']
};

ftpDeploy.deploy(config, function(err) {
    if (err) console.log(err);
    else console.log('finished');
});

ftpDeploy.on('uploading', function(data) {
    data.totalFileCount;       // total file count being transferred
    data.transferredFileCount; // number of files transferred
    data.filename;             // partial path with filename being uploaded
});
ftpDeploy.on('uploaded', function(data) {
    console.log(data);         // same data as uploading event
});