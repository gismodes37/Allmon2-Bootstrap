<?php
; The %node% template will be replaced with your node number at run time
; Put controls in the [general] that will show for all nodes.
[general] 
labels[] = "Show Node Status"
cmds[] = "rpt stats %node%"
labels[] = "Show Asterisk uptime"
cmds[] = "core show uptime"
labels[] = "Show IAX Registry"
cmds[] = "iax2 show registry"
labels[] = "Show IAX Channel Status"
cmds[] = "iax2 show channels"
labels[] = "Show IAX Network Status"
cmds[] = "iax2 show netstats"
labels[] = "Show Link Status"
cmds[] = "rpt lstats %node%"
labels[] = "Say app_rpt Verison"
cmds[] = "rpt cmd %node% status 3 xxx"
labels[] = "Say Link Status"
cmds[] = "rpt cmd %node% ilink 5 xxx"
labels[] = "Say Link Extended Status"
cmds[] = "rpt cmd %node% ilink 15 xxx"
labels[] = "Say Time of Day (local only)"
cmds[] = "rpt cmd %node% status 12 xxx"
labels[] = "Say Time of Day (local only) the TT way"
cmds[] = "rpt fun %node% *74"
labels[] = "Local Telemetry Output Enable"
cmds[] = "rpt cmd %node% cop 33 xxx"
labels[] = "Local Telemetry Output Disable"
cmds[] = "rpt cmd %node% cop 34 xxx"
labels[] = "Local Telemetry Output on Demand"
cmds[] = "rpt cmd %node% cop 35 xxx"
labels[] = "Force ID (local only)"
cmds[] = "rpt cmd %node% status 11 xxx"
labels[] = "Disable System"
cmds[] = "rpt cmd %node% cop 3 xxx"
labels[] = "Enable System"
cmds[] = "rpt cmd %node% cop 2 xxx"
labels[] = "Disable Linking"
cmds[] = "rpt cmd %node% cop 12 xxx"
labels[] = "Enable Linking"
cmds[] = "rpt cmd %node% cop 11 xxx"
labels[] = "Disable Autopatch"
cmds[] = "rpt cmd %node% cop 10 xxx"
labels[] = "Enable Autopatch"
cmds[] = "rpt cmd %node% cop 9 xxx"
labels[] = "Disable User Functions"
cmds[] = "rpt cmd %node% cop 18 xxx"
labels[] = "Enable User Functions"
cmds[] = "rpt cmd %node% cop 17 xxx"
labels[] = "System State 0 (normal)"
cmds[] = "rpt cmd %node% cop 14 0"
labels[] = "System State 1 (rpt only)"
cmds[] = "rpt cmd %node% cop 14 1"

; Put additional controls here for specific nodes.
[500]
labels[] = "Show Simulcast Status"
cmds[] = "voter txlockout %node%"
labels[] = "Simulcast All On"
cmds[] = "voter txlockout %node% none"
labels[] = "Simulcast Site1 Off"
cmds[] = "voter txlockout %node% +site1-uhf"
labels[] = "Simulcast Site1 On"
cmds[] = "voter txlockout %node% -site1-uhf"
labels[] = "Simulcast Site 2 UHF Off"
cmds[] = "voter txlockout %node% +site2-uhf"
labels[] = "Simulcast Site 2 UHF On"
cmds[] = "voter txlockout %node% +site2-uhf"
; VOTER 
labels[] = "Show Voter Status"
cmds[] = "voter prio %node%"
labels[] = "Voter All On"
cmds[] = "voter prio %node% all 0"
labels[] = "Voter Site1 Off"
cmds[] = "voter prio %node% site1-uhf -1"
labels[] = "Voter Site1 On"
cmds[] = "voter prio %node% site1-uhf 0"
labels[] = "Voter Site 2 UHF Off"
cmds[] = "voter prio %node% site2-uhf -1"
labels[] = "Voter Site 2 UHF On"
cmds[] = "voter prio %node% site2-uhf 0"
labels[] = "Voter Signal Off"
cmds[] = "voter prio %node% signal -1"
labels[] = "Voter Signal On"
cmds[] = "voter prio %node% signal 0"

[501]
labels[] = "Show Simulcast Status"
cmds[] = "voter txlockout %node%"
labels[] = "Simulcast All Off"
cmds[] = "voter txlockout %node% all"
labels[] = "Simulcast All On"
cmds[] = "voter txlockout %node% none"
labels[] = "Simulcast Site1 Off"
cmds[] = "voter txlockout %node% +site1"
labels[] = "Simulcast Site1 On"
cmds[] = "voter txlockout %node% -site1"
labels[] = "Simulcast Site2 Off"
cmds[] = "voter txlockout %node% +Site2"
labels[] = "Simulcast Site2 On"
cmds[] = "voter txlockout %node% -Site2"
; VOTER 
labels[] = "Show Voter Status"
cmds[] = "voter prio %node%"
labels[] = "Voter All On"
cmds[] = "voter prio %node% all 0"
labels[] = "Voter Site1 Off"
cmds[] = "voter prio %node% site1 -1"
labels[] = "Voter Site1 On"
cmds[] = "voter prio %node% site1 0"
labels[] = "Voter Site2 Off"
cmds[] = "voter prio %node% Site2 -1"
labels[] = "Voter Site2 On"
cmds[] = "voter prio %node% Site2 0"
labels[] = "Voter Site Number 3 Off"
cmds[] = "voter prio %node% site3 -1"
labels[] = "Voter Site Number 3 On"
cmds[] = "voter prio %node% site3 0"
labels[] = "Voter Site 4 Off"
cmds[] = "voter prio %node% site4 -1"
labels[] = "Voter Site 4 On"
cmds[] = "voter prio %node% site4 0"
?>
