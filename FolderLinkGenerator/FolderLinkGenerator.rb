#!/usr/bin/env ruby
#
$output = File.new("link.txt", "w")
$link = Hash.new
$count = 0
Dir.chdir("/var/www/")
Dir["*"].each { |a|
	if File.ftype(a)=="directory" || File.ftype(a)=="link"
	        # puts "#{a}"
		$link[$count=$count+1]=a
     	end
}

$link.each {|k,v| $output.puts( v.to_s)}
$output.close

