module.exports = function(grunt){
	grunt.initConfig({
		watch: {
			less: {
				files: ['css/src/!(colors)*.less'],
				tasks: ['less', 'postcss'], // run single method with concat:method_name
				options: {
				  livereload: true,
				},
			},
			scripts: {
				files: ['scripts/src/*.js'],
				tasks: ['uglify'], // run single method with concat:method_name
				options: {
				  livereload: true,
				},
			},
		},
		concat: {
			css: {
				src: ['css/build/*.css','!css/build/fotorama.css', '!css/build/styles.css', '!css/build/colors.css', '!css/build/type_mixins.css'],
				dest: 'css/build/styles.css',
			},
		},
		less: {
			src: {
			   expand:	true,
			   cwd:		"css/src",
			   src:		"*.less",
			   dest:	"css/build",
			   ext:		".css",
		   },
		},
		postcss: {
			options: {
				processors: [
					require('pixrem')(), // add fallbacks for rem units
					require('autoprefixer')({
						browsers: ['last 2 versions', '> 5%'],
					}), // add vendor prefixes
					require('cssnano')() //minify
				]
			},
			dist: {
				src: 'css/build/*.css'
			}
		},
		uglify: {
			my_target: {
				files:[{
					expand: true,
					cwd:	'scripts/src',
					src:	'*.js',
					dest:	'scripts/build',
					ext:	'.min.js'
				}]
			}
		},
	});

	// Enable Dependencies
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.registerTask('default', ['watch']);
	grunt.registerTask('finalize', ['concat', 'postcss']);
};
