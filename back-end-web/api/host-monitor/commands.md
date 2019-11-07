# Commands

```
$ hostname
ubuntu-xenial
```

```
$ whoami
ubuntu
```

```
$ uptime
15:42:01 up  2:13,  1 user,  load average: 0.03, 0.01, 0.00
```

```
$ uptime -p
up 2 hours, 18 minutes
```

```
$ lsb_release -r
Release:	16.04
```

```
$ lsb_release -c
Codename:	xenial
```

```
$ lsb_release -i
Distributor ID:	Ubuntu
```

```
# http://blog.scoutapp.com/articles/2015/02/24/understanding-linuxs-cpu-stats
# us: running user space processes
# id: processor was idle
# sy: running the kernel
# ni: how much time the CPU spent running user space processes that have been niced
# wa: idle while waiting for an I/O operation to complete
# hi & si: how much time the processor has spent servicing interrupts
# st: how long the virtual CPU has spent waiting for the hypervisor to service another virtual CPU
$ top -n 1

top - 16:17:35 up 19 min,  1 user,  load average: 0.00, 0.00, 0.00
Tasks: 131 total,   1 running, 130 sleeping,   0 stopped,   0 zombie
%Cpu(s):  1.1 us,  0.9 sy,  0.2 ni, 97.6 id,  0.1 wa,  0.0 hi,  0.1 si,  0.0 st
KiB Mem :  1016028 total,   479604 free,    75732 used,   460692 buff/cache
KiB Swap:        0 total,        0 free,        0 used.   758512 avail Mem

  PID USER      PR  NI    VIRT    RES    SHR S  %CPU %MEM     TIME+ COMMAND    
10670 ubuntu    20   0   40540   3732   3160 R   6.7  0.4   0:00.01 top        
    1 root      20   0  119804   5980   4008 S   0.0  0.6   0:21.84 systemd    
    2 root      20   0       0      0      0 S   0.0  0.0   0:00.00 kthreadd   
    3 root      20   0       0      0      0 S   0.0  0.0   0:00.12 ksoftirqd/0
    5 root       0 -20       0      0      0 S   0.0  0.0   0:00.00 kworker/0:+
    7 root      20   0       0      0      0 S   0.0  0.0   0:00.21 rcu_sched  
    8 root      20   0       0      0      0 S   0.0  0.0   0:00.00 rcu_bh     
    9 root      rt   0       0      0      0 S   0.0  0.0   0:00.06 migration/0
   10 root      rt   0       0      0      0 S   0.0  0.0   0:00.00 watchdog/0
   11 root      rt   0       0      0      0 S   0.0  0.0   0:00.01 watchdog/1
   12 root      rt   0       0      0      0 S   0.0  0.0   0:00.07 migration/1
   13 root      20   0       0      0      0 S   0.0  0.0   0:00.13 ksoftirqd/1
   14 root      20   0       0      0      0 S   0.0  0.0   0:00.00 kworker/1:0
   15 root       0 -20       0      0      0 S   0.0  0.0   0:00.00 kworker/1:+
   16 root      20   0       0      0      0 S   0.0  0.0   0:00.00 kdevtmpfs  
   17 root       0 -20       0      0      0 S   0.0  0.0   0:00.00 netns      
   18 root       0 -20       0      0      0 S   0.0  0.0   0:00.00 perf
```