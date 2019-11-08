# Commands

```
$ ls /sys/class/net/
eth0  lo

$ cat /sys/class/net/eth0/statistics/rx_bytes
85061

$ cat /sys/class/net/eth0/statistics/tx_bytes
74576

$ netstat -i
Kernel Interface table
Iface   MTU Met   RX-OK RX-ERR RX-DRP RX-OVR    TX-OK TX-ERR TX-DRP TX-OVR Flg
eth0       1500 0      1027      0      0 0           652      0      0      0 BMRU
lo        65536 0        24      0      0 0            24      0      0      0 LRU

$ ip -s link
1: lo: <LOOPBACK,UP,LOWER_UP> mtu 65536 qdisc noqueue state UNKNOWN mode DEFAULT group default
    link/loopback 00:00:00:00:00:00 brd 00:00:00:00:00:00
    RX: bytes  packets  errors  dropped overrun mcast
    2370       24       0       0       0       0
    TX: bytes  packets  errors  dropped carrier collsns
    2370       24       0       0       0       0
2: eth0: <BROADCAST,MULTICAST,UP,LOWER_UP> mtu 1500 qdisc pfifo_fast state UP mode DEFAULT group default qlen 1000
    link/ether 08:00:27:62:8e:9b brd ff:ff:ff:ff:ff:ff
    RX: bytes  packets  errors  dropped overrun mcast
    76273      856      0       0       0       0
    TX: bytes  packets  errors  dropped carrier collsns
    66026      547      0       0       0       0
```

```
$ sudo netstat -tupanl
Active Internet connections (servers and established)
Proto Recv-Q Send-Q Local Address           Foreign Address         State       PID/Program name
tcp        0      0 0.0.0.0:3306            0.0.0.0:*               LISTEN      1069/mysqld
tcp        0      0 0.0.0.0:111             0.0.0.0:*               LISTEN      630/rpcbind
tcp        0      0 0.0.0.0:22              0.0.0.0:*               LISTEN      1004/sshd
tcp        0      0 0.0.0.0:44698           0.0.0.0:*               LISTEN      678/rpc.statd
tcp        0      0 10.0.2.15:22            10.0.2.2:55723          ESTABLISHED 26350/sshd: vagrant
tcp6       0      0 :::111                  :::*                    LISTEN      630/rpcbind
tcp6       0      0 :::80                   :::*                    LISTEN      1304/apache2
tcp6       0      0 :::22                   :::*                    LISTEN      1004/sshd
tcp6       0      0 :::60698                :::*                    LISTEN      678/rpc.statd
udp        0      0 0.0.0.0:68              0.0.0.0:*                           518/dhclient
udp        0      0 127.0.0.1:854           0.0.0.0:*                           678/rpc.statd
udp        0      0 0.0.0.0:111             0.0.0.0:*                           630/rpcbind
udp        0      0 0.0.0.0:47493           0.0.0.0:*                           678/rpc.statd
udp        0      0 0.0.0.0:55547           0.0.0.0:*                           518/dhclient
udp        0      0 0.0.0.0:801             0.0.0.0:*                           630/rpcbind
udp6       0      0 :::111                  :::*                                630/rpcbind
udp6       0      0 :::54988                :::*                                678/rpc.statd
udp6       0      0 :::30730                :::*                                518/dhclient
udp6       0      0 :::801                  :::*                                630/rpcbind
```