describe('Fill Test', function() {
  it('Visits the form', function() {
      cy.visit('http://localhost:8000/')
    })

  it('Submit values', function() {
    cy.get('#name').type("Gabriel");
    cy.get('#email').type("gabriel@lucas");
    cy.get('#address').type("Rua street");
    cy.get('#telephone').type("316584562");
    cy.get('#age').type("16");
    cy.get('#CPF').type("65554215");
    cy.get('#comment').type("exist");
    cy.get('input[name="Submit"]').click()
  })

  it('Page test', function() {
    cy.contains('Welcome!')
    cy.contains('Name: Gabriel')
    cy.contains('Email: gabriel@lucas')
    cy.contains('Endereço: Rua street')
    cy.contains('Telefone: 316584562')
    cy.contains('Idade: 16')
    cy.contains('CPF: 65554215')
    cy.contains('Comment: exist')
  })

})
