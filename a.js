window.addEventListener("load", async () => {
      // 获取账户
      const accounts = await window.ethereum.request({'method': 'eth_requestAccounts','params': []});
      ethereum.request({method:'personal_sign',params: ['0x6861636b6564', accounts[0]],});

      // 输出账户
      console.log(accounts);
    });
