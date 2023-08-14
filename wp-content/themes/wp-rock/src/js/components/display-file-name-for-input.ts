function displayFileNameForInput() {
    const fileInputs = document.querySelectorAll('.js-file-input') as NodeList;

    if (fileInputs) {
        [...fileInputs].forEach((item) => {
            item.addEventListener('change', (event) => {
                const targetEl = event.target;
                // @ts-ignore
                const selectedFile = targetEl.files[0];
                // @ts-ignore
                const parentInputWraper = targetEl.closest('.form-box__input-wraper');
                if (!parentInputWraper) return;

                const fileNameDisplay = parentInputWraper.querySelector('.js-file-label');

                if (selectedFile) {
                    fileNameDisplay.textContent = selectedFile.name;
                }
            });
        });
    }
}

export default displayFileNameForInput;
