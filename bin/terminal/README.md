# Terminal

## PhpStorm
```bash
File | Settings | Tools | Terminal
```
Choose one of the following, depending upon your preferred terminal.

_These options will append the following to the `PATH` environment variable in any newly executed Terminal in PhpStorm._
- `{PROJECT}\dev\vendor\bin`
- `{PROJECT}\bin`

### CMD
Shell Path
```bash
cmd /k bin\terminal\cmd.bat || cls
```

### PowerShell 7
Shell Path
```bash
pwsh -NoExit -Command "bin\terminal\powershell.ps1 || cls"
```

### Cmder
Environment Variables (if not set in PATH already)
```bash
CMDER_ROOT={CMDER_PATH}
```
Shell Path
```bash
cmd /k bin\terminal\cmder.cmd || cls && call \"%CMDER_ROOT%\vendor\init.bat\"
```

### Git Bash
Shell Path
```bash
C:\Program Files\Git\bin\bash.exe --rcfile bin/terminal/.bashrc
```
