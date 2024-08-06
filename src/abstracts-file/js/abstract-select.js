function handleLink(value) {
    
    if (value === 'full paper') {
        const url = new URL(
            "/isahcmu/src/abstracts-file/full",
            window.location.protocol + "//" + window.location.hostname
          );
        window.location.href = url;
    } else if (value === 'abstract only') {
        const url = new URL(
            "/isahcmu/src/abstracts-file/only",
            window.location.protocol + "//" + window.location.hostname
          );
        window.location.href = url;
    }
}

const downloadTemplate = () => {
  const url = new URL(
    "/isahcmu/src/abstracts-file/file/AbstractTemplate.docx",
    window.location.protocol + "//" + window.location.hostname
  );
  window.open(url);
};