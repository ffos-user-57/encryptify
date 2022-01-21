describe('Testiranje Encryptify Web sjedišta/Projektnog rada', () => {

    it('1- Pravilno učitavanje Početne stranice', async () => {
        
        browser.url('http://localhost/projektnirad/');

        const index = await $('h3');
        await expect(index).toHaveText("Press a button – get hashes.");

        await browser.pause(1000);

    });

    //it('2- Testiranje forme za pretvaranje lozinke - prazno', async () => {

     //   browser.url('http://localhost/projektnirad/');

     //   const input = await $('input');
      //  await input.setValue('');

      //  const submitBtn = await $('.w3-button.w3-green.w3-padding-medium.w3-medium');
       // await submitBtn.click();

      //  const result = await $('.result');
      //  await expect(result).toHaveTextContaining('Error');
      //  await browser.pause(3000);

    //});


    it('3- Testiranje forme za pretvaranje lozinke', async () => {

        browser.url('http://localhost/projektnirad/');

        const input = await $('input');
        await input.setValue('lozinka1');

        const submitBtn = await $('.w3-button.w3-green.w3-padding-medium.w3-medium');
        await submitBtn.click();

        const result = await $('.result');
        await expect(result).toHaveTextContaining('Your hashes:');
        await browser.pause(3000);

    });

    it('4- Testiranje promjene jezika', async () => {

        browser.url('http://localhost/projektnirad/');

        const ikonazajezik = await $('a[href="hr/index.php"]');
        await ikonazajezik.click();

        const hrvatskinaslov = await $('h3');
        await expect(hrvatskinaslov).toHaveText("Klikni gumb - dobij hasheve.");

    });

    it('5- Testiranje radi li Bulk encrypt stranica', async () => {
       
        browser.url('http://localhost/projektnirad/');

        const buttonbulk = await $('a[href="./bulk.php"]');
        await buttonbulk.click();

        const noviNaslov = await $("h3")
        await expect(noviNaslov).toHaveText("Multiple passwords to hashes");

    });

    //it('6- Testiranje forme za pretvaranje lozinke - nepravilno', async () => {

      //  browser.url('http://localhost/projektnirad/bulk.php');

     //   const textArea = await $('textarea');
      // await textArea.setValue('lozinka1  lozinka2');

     //   const submitBtn = await $('.w3-button.w3-green.w3-padding-medium.w3-medium');
      //  await submitBtn.click();

      //  const result = await $('.result');
     //   await expect(result).toHaveTextContaining('Error');

  //  });

    //it('7- Testiranje forme za pretvaranje lozinke - prazno', async () => {

     //   browser.url('http://localhost/projektnirad/bulk.php');

     //   const textArea = await $('textarea');
     //   await textArea.setValue('');

     //   const submitBtn = await $('.w3-button.w3-green.w3-padding-medium.w3-medium');
      //  await submitBtn.click();

      //  const result = await $('.result');
      //  await expect(result).toHaveTextContaining('Error :');

   // });

    it('8- Testiranje forme za pretvaranje lozinke', async () => {

        browser.url('http://localhost/projektnirad/bulk.php');

        const textArea = await $('textarea');
        await textArea.setValue('lozinka1,lozinka2');

        const submitBtn = await $('.w3-button.w3-green.w3-padding-medium.w3-medium');
        await submitBtn.click();

        const result = await $('.result');
        await expect(result).toHaveTextContaining('MD5 :');

    });

    it('9- Testiranje poveznice na Početnu stranicu', async () => {
       
        browser.url('http://localhost/projektnirad/bulk.php');

        const index = await $('a[href="./index.php"]');
        await index.click();

        const noviNaslov = await $("h3")
        await expect(noviNaslov).toHaveText("Press a button – get hashes.");

    });

    it('10- Testiranje radi li Stay safe online stranica', async () => {
       
        browser.url('http://localhost/projektnirad/bulk.php');

        const learn = await $('a[href="./learn.php"]');
        await learn.click();

        const noviNaslov = await $("h3")
        await expect(noviNaslov).toHaveText("About Hashes, Us and staying safe online");

    });

    it('11- Testiranje poveznice na Generator stranicu', async () => {
       
        browser.url('http://localhost/projektnirad/learn.php');

        const index = await $('a[href="./generator.php"]');
        await index.click();

        const noviNaslov = await $("h3")
        await expect(noviNaslov).toHaveText("Press a button – Get a safe password.");

    });

    it('12- Testiranje gumba za Generiranje lozinke', async () => {
       
        browser.url('http://localhost/projektnirad/generator.php');

        const submitBtn = await $('.w3-button.w3-green.w3-padding-medium.w3-medium');
        await submitBtn.click();

        const result = await $('.result');
        await expect(result).toHaveTextContaining("Generated safe password :");

    });

    it('13- Testiranje vanjske poveznice na Generator stranici', async () => {
       
        browser.url('http://localhost/projektnirad/generator.php');

        const generator = await $('a[href="https://en.wikipedia.org/wiki/List_of_the_most_common_passwords"]');
        await generator.click();

        const noviNaslov = await $('#firstHeading')
        await expect(noviNaslov).toHaveText("List of the most common passwords");

    });

    it('14- Testiranje provjere snage lozinke - nesigurna lozinka', async () => {
        
        browser.url('http://localhost/projektnirad/');

        const checkerGumb = await $('a[href="./checker.php"]');
        await checkerGumb.click();

        const input = await $('input');
        await input.setValue('lozinka123');

        const submitBtn = await $('.w3-button.w3-green.w3-padding-medium.w3-medium');
        await submitBtn.click();

        await browser.pause(1000);

        const result = await $('.result');
        expect(result).toHaveTextContaining("Password must include");

    });

    it('15- Testiranje provjere snage lozinke - sigurna lozinka', async () => {
        
        browser.url('http://localhost/projektnirad/checker.php/');

        const input = await $('input');
        await input.setValue('Lozinka123!');

        const submitBtn = await $('.w3-button.w3-green.w3-padding-medium.w3-medium');
        await submitBtn.click();

        await browser.pause(1000);

        const result = await $('.result');
        expect(result).toHaveTextContaining("Safe");

    });

    it('16- Navigacija - vodi li klik na logo na početnu stranicu', async () => {
        
        browser.url('http://localhost/projektnirad/checker.php');

        const img = await $('a[href="./index.php"]');
        await img.click();
        
        const index = await $('h3');
        await expect(index).toHaveText("Press a button – get hashes.");

    });

    it('17- Responzivnost stranice', async () => {
        
        browser.url('http://localhost/projektnirad/');
        browser.setWindowSize(390, 844);
        await browser.pause(3000);

        const hamburger = await $('.w3-bar-item.w3-button.w3-right.w3-hide-large.w3-hide-medium');
        await expect(hamburger).toHaveHrefContaining('javascript:void(0)');

    });



    
})
