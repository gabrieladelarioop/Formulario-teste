describe('Required test', function() {
    it('Visits the form', function() {
      cy.visit('http://localhost:8000/')
    })

  it('Submit values', function() {

    cy.get('input[name="Submit"]').click()
    cy.contains('Welcome!').should('not.exist')

  })
})
