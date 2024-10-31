# wpplugin
cmd command execute in all directories
dir *.* | % { (Get-Content $_) -replace 'foo','bar' | Set-Content $_ }
