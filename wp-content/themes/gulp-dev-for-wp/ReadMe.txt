Basic Gulp-Based SASS Build Process

This build process assumes that you have an Underscores-based starter theme, or
at least a theme with a "sass" folder at the top level.


Copy this folder (gulp-dev-for-wp) into your wp-content/themes folder.

(Do not put it into into your theme folder. Rather, put it in the same folder that holds your theme.)

Edit the file gulpfile.js: change the value of the first variable to match the exact folder name of your theme.




Then, in the command line navigate into this folder (gulp-dev-for-wp).

Run this command: npm install

Once the required modules install, run this command: gulp watch

Every time you make an edit to a sass file or partial, the sass compilation process will reoccur.
