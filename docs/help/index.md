
# Usage


### Get
```shell
$ docker pull daspanel/daspanel-services:latest
```

### Run
```shell
$ docker run -e DASPANEL_MASTER_EMAIL=my@email.com --name=my-daspanel-services daspanel/daspanel-services:latest
```

### Stop
```shell
$ docker stop my-daspanel-services
```

### Update image
```shell
$ docker stop my-daspanel-services
$ docker pull daspanel/daspanel-services:latest
$ docker run -e DASPANEL_MASTER_EMAIL=my@email.com --name=my-daspanel-services daspanel/daspanel-services:latest
```

# Tips
