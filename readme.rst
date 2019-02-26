
server {
        listen       5000;
        server_name  ci.xaxin.cn;

        #charset koi8-r;

        #access_log  logs/host.access.log  main;

        location / {
            root   /www/wwwroot/ci; #配置web目录
            #root /www/wwwroot/ci;
            autoindex on;
            index  index.html index.htm index.php; #添加php默认
        }

        location ~ \.php$ {
            root           /www/wwwroot/ci;
            #root /www/wwwroot/ci;
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            #fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }
}

本地
server {
        listen       5000;
        server_name  localhost;

        #charset koi8-r;

        #access_log  logs/host.access.log  main;

        location / {
            root   /Users/penglin/myfile/ci; #配置web目录
            #root /Users/penglin/myfile/ci;
            autoindex on;
            index  index.html index.htm index.php; #添加php默认
            if (!-e $request_filename) {
                    rewrite ^/(.*)$ /index.php?$1 last;
                    break;
            }
        }

        location ~ \.php$ {
            root           /Users/penglin/myfile/ci;
            #root /Users/penglin/myfile/ci;
            fastcgi_pass   127.0.0.1:9000;
            fastcgi_index  index.php;
            #fastcgi_param  SCRIPT_FILENAME  /scripts$fastcgi_script_name;
            fastcgi_param  SCRIPT_FILENAME  $document_root$fastcgi_script_name;
            include        fastcgi_params;
        }
    }


php-fpm --fpm-config /usr/local/etc/php/7.3/php-fpm.conf --prefix /usr/local/var
/usr/local/etc/nginx/nginx.conf