export const params = {
  file:{
    display: 'File',
    type: 'file',
    target: 'filebody',
    default: [],
    size: 6
  },

  processor: {
    display: 'processor',
    type: 'select',
    items: [
      { name: 'none', display: '(None)', flag: 'none' },
      { name: 'UNCUURRY', display: 'UNCURRY' },
      { name: 'EDG', display: 'EDG' },
      { name: 'LOOP', display: 'LOOP' }
    ],
    default: { name: 'none', display: '(None)', flag: 'none' },
    size: 3
  },

  order: {
    display: 'order',
    type: 'select',
    items: [
      { name: '', display: '(None)' },
      { name: 'WPO', display: 'WPO' },
      { name: 'POLO', display: 'POLO' },
      { name: 'LPO', display: 'LPO' },
      { name: 'MPO', display: 'MPO' },
      { name: 'RPO', display: 'RPO' },
      { name: 'KBO', display: 'KBO' }
    ],
    default: { name: '', display: '(None)' },
    size: 3,
    if: 'none'
  },
  //option  
  help: {
    default: false
  },

  filebody: {
    display: 'file body',
    type: 'textarea',
    rows: 20,
    default: '',
    monospace: true,
    size: 'whole'
  }
}
